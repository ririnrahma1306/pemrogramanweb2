<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->get('submit', 'Home::submit');
$routes->get('images/(:segment)', 'Home::image/$1');

service('auth')->routes($routes);

//Admin
$routes->group('admin', ['filter' => 'group:admin,superadmin,developer'], function($routes){

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('data-buku', 'AdminController::data_buku');
    $routes->post('data-buku', 'AdminController::create_buku');
    $routes->get('data-buku/(:segment)/edit', 'AdminController::edit_buku/$1');
    $routes->post('data-buku/(:segment)/update', 'AdminController::update_buku/$1');
});

