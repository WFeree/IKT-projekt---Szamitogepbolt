<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Renderer::selector');
$routes->get('/create', 'Renderer::create_GET');
$routes->post('/create', 'PartsController::create_POST');