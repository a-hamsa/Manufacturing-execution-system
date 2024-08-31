<?php

use CodeIgniter\Router\RouteCollection;
use Config\Services;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false); // Set to true if you want automatic routing (optional)

$routes->get('/', 'Home::index');

// Machines routes
$routes->get('/machines', 'Machines::index');         // List all machines
$routes->get('/machines/create', 'Machines::create'); // Display form to create machine
$routes->post('/machines/store', 'Machines::store');  // Store new machine

// Operators routes
$routes->get('/operators', 'Operators::index');         // List all operators
$routes->get('/operators/create', 'Operators::create'); // Show the form to create a new operator
$routes->post('/operators/store', 'Operators::store');  // Store new operator

// Shifts routes
$routes->get('/shifts', 'Shifts::index');         // List all shifts
$routes->get('/shifts/create', 'Shifts::create'); // Show the form to create a new shift
$routes->post('/shifts/store', 'Shifts::store');  // Store new shift

// Work Orders routes
$routes->get('/work_orders', 'WorkOrders::index');         // List all work orders
$routes->get('/work_orders/create', 'WorkOrders::create'); // Show the form to create a new work order
$routes->post('/work_orders/store', 'WorkOrders::store');  // Store new work order

// Products routes
$routes->get('/products', 'Products::index');         // List all products
$routes->get('/products/create', 'Products::create'); // Show the form to create a new product
$routes->post('/products/store', 'Products::store');  // Store new product

// Production Logs routes
$routes->get('/production_logs', 'ProductionLogs::index');         // List all production logs
$routes->get('/production_logs/create', 'ProductionLogs::create'); // Show the form to create a new production log
$routes->post('/production_logs/store', 'ProductionLogs::store');  // Store new production log
