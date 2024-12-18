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

service('auth')->routes($routes);

//Admin
$routes->group('admin', ['filter' => 'group:admin,superadmin,developer'], function($routes){

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('data-buku', 'AdminController::data_buku');
});
