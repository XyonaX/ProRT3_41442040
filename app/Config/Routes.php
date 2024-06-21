<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/registro', 'Home::registro_index');
$routes->get('/login', 'Home::login_index');
