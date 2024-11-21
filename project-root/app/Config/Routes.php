<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Renderer::show');
$routes->get('/create', 'Renderer::create_GET');
$routes->post('/create', 'Renderer::create_POST');