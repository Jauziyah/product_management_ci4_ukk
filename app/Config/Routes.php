<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// penjual page display
$routes->get('/penjual/product', 'Penjual_page_display::index');
// Product Display
$routes->get('/detail/(:segment)', 'Penjual_page_display::detail/$1');

