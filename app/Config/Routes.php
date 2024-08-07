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
