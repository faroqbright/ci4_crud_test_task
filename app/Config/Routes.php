<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('employees', 'EmployeeController::index');
$routes->get('employee/create', 'EmployeeController::createView');
$routes->post('employee/create', 'EmployeeController::create');
$routes->get('employee/update/(:num)', 'EmployeeController::updateView/$1');
$routes->post('employee/update/(:num)', 'EmployeeController::update/$1');
$routes->get('employee/delete/(:num)', 'EmployeeController::deleteView/$1');
$routes->post('employee/delete/(:num)', 'EmployeeController::delete/$1');
