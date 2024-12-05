<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');

$routes->get('/Beranda', 'Beranda::index');

$routes->get('petani/(:num)', 'EthereumController::viewPetani/$1');
$routes->get('petani', 'EthereumController::viewAllPetani');
