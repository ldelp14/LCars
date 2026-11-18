<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'CarroController::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/catalogo', 'Home::catalogo');
$routes->get('/pag2', 'Home::carrinho');
