<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', 'Admin::index');

$routes->get('/auth', 'Auth::index');
$routes->post('/auth', 'Auth::prosesLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/users', 'User::index');
$routes->post('/users', 'User::add');
$routes->post('/users/(:num)', 'User::delete/$1');
$routes->post('/users/(:num)/edit', 'User::edit/$1');

$routes->get('/kriteria', 'Kriteria::index');
$routes->post('/kriteria', 'Kriteria::add');
$routes->post('/kriteria/(:num)', 'Kriteria::delete/$1');
$routes->post('/kriteria/(:num)/edit', 'Kriteria::edit/$1');

$routes->get('/alternatif', 'Alternatif::index');
$routes->get('/alternatif/add', 'Alternatif::add');
$routes->post('/alternatif', 'Alternatif::addAlt');
$routes->get('/alternatif/(:num)', 'Alternatif::delete/$1');

$routes->get('/perbandingan', 'Perbandingan::index');
