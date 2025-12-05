<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/penjual', 'Penjual_display_page::index');
$routes->get('/penjual/product', 'Penjual_display_page::product');
$routes->get('/penjual/product-(:any)', 'Penjual_display_page::detail_produk/$1');
$routes->get('/penjual/product/tambah', 'Penjual_display_page::create_product');
$routes->post('/penjual/product/create', 'Penjual_product_create::index');