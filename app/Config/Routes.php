<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/penjual', 'Penjual_display_page::index');
$routes->get('/penjual/product', 'Penjual_display_page::product');
$routes->get('/penjual/product-(:any)', 'Penjual_display_page::detail_produk/$1');