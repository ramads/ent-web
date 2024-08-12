<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->get('/doLogin', 'AuthController::doLogin');
$routes->get('/patient', 'PatientController::index');
$routes->get('/patient/add', 'PatientController::insert');
$routes->post('/patient/save', 'PatientController::save');
$routes->get('address/cities/(:num)', 'AddressController::cities/$1');
$routes->get('address/districts/(:num)', 'AddressController::districts/$1');
$routes->get('address/villages/(:num)', 'AddressController::villages/$1');
