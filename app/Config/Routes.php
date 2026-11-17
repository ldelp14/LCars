<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'CarroController::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/pag1', 'Home::fun1');
$routes->get('/pag2', 'Home::fun2');
