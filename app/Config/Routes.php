<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Tasks::index');
$routes->get('/tasks', 'Tasks::list');
$routes->get('/profile', 'Tasks::profile');
$routes->get('/about', 'Tasks::about');
$routes->post('/tasks/(:num)/status', 'Tasks::updateStatus/$1');