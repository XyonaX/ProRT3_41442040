<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/registro', 'Home::registro_index');
$routes->get('/login', 'Home::login_index');
$routes->get('/quienesSomos', 'Home::quienesSomos_index');
$routes->get('/acercade', 'Home::acercade_index');
$routes->get('/logout', 'UsuariosController::logout_user');
$routes->post('/registro', 'UsuariosController::registro_usuario');
$routes->post('/login', 'Login_controller::login_user');
$routes->post('/usuarios/toggle_estado/(:num)', 'UsuariosController::toggle_estado/$1');
$routes->get('/ver_usuarios', 'UsuariosController::listar_usuarios');
$routes->get('/usuarios/editar/(:num)', 'UsuariosController::editar_usuario/$1');
$routes->post('/usuarios/actualizar/(:num)', 'UsuariosController::actualizar_usuario/$1');