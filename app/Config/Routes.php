<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->resource('officer', ['controller' => 'Officer', 'only' => ['index', 'show', 'create', 'update', 'delete']]);
$routes->resource('user', ['controller' => 'User']);//, 'only' => ['index', 'show', 'create', 'update', 'delete']]);

$routes->get('/', 'Mainapp::index');
$routes->get('/home', 'Mainapp::home');

$routes->get('/officers', 'Mainapp::addofficer');
$routes->get('/officers/add', 'Mainapp::addofficer');
$routes->get('/officers/edit', 'Mainapp::editofficer');

$routes->post('/user/login', 'User::login');
$routes->post('/officer/create', 'Officer::create');
$routes->post('/officer/delete', 'Officer::delete');
$routes->post('/officer/update', 'Officer::update');