<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="/">Today / Tasks</a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-label="Toggle navigation">+</button>
            <nav class="site-nav" aria-label="Main navigation">
                <a href="/">Today</a>
                <a class="active" href="/tasks">All Tasks</a>
                <a href="/profile">Profile</a>
                <a href="/about">About</a>
            </nav>
        </div>
    </header>

    <main class="page-shell reveal">
        <p class="eyebrow">Task archive</p>
        <h1>Every task.</h1>
        <p class="intro">Search the full list or filter it by status.</p>

        <div class="toolbar">
            <input class="control search-control" type="search" placeholder="Search tasks" aria-label="Search tasks" data-task-search>
            <select class="control" aria-label="Filter by status" data-task-filter>
                <option value="all">All statuses</option>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr data-task-row data-title="<?= esc(strtolower($task['title'])) ?>" data-status="<?= esc($task['status']) ?>">
                            <td><?= esc($task['title']) ?></td>
                            <td><span class="status-pill"><?= esc($task['status']) ?></span></td>
                            <td><?= esc($task['task_date']) ?></td>
                            <td><?= esc($task['created_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/js/app.js"></script>
</body>
</html>