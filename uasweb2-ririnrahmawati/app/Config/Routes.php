<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/tambah', 'Home::tambah');

$routes->post('/edit', 'Home::edit');
$routes->get('/hapus/(:segment)', 'Home::hapus/$1');


service('auth')->routes($routes);
