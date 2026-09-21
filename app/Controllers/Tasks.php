<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Tasks for Today',
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('tasks/welcome', $data);
    }

    public function list()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'All Tasks',
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ];

        return view('tasks/list', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'Profile',
            'user'  => $userModel->first(),
        ];

        return view('tasks/profile', $data);
    }

    public function about()
    {
        return view('tasks/about', [
            'title' => 'About',
        ]);
    }

    public function updateStatus(int $id)
    {
        $status = $this->request->getJSON(true)['status'] ?? null;

        if (! in_array($status, ['pending', 'completed'], true)) {
            return $this->response->setStatusCode(400)->setJSON([
                'error' => 'Invalid task status.',
            ]);
        }

        $taskModel = new TaskModel();

        if ($taskModel->find($id) === null) {
            return $this->response->setStatusCode(404)->setJSON([
                'error' => 'Task not found.',
            ]);
        }

        $taskModel->update($id, ['status' => $status]);

        return $this->response->setJSON([
            'id'     => $id,
            'status' => $status,
        ]);
    }
}
