<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// <-----------------Penjual Page Display------------------>
$routes->get('/penjual', 'Penjual_display_page::index'); // page dashboard
$routes->get('/penjual/product', 'Penjual_display_page::product'); // page product
$routes->get('/penjual/product/edit/(:any)', 'Penjual_display_page::edit_product/$1'); // page edit
$routes->get('/penjual/product/tambah', 'Penjual_display_page::create_product'); // create product

// <-----------------CRUD Method Penjual Produk------------------>
$routes->get('/penjual/product/(:num)', 'Penjual_product_delete::index/$1'); // delete
$routes->get('/penjual/product/(:any)', 'Penjual_display_page::detail_produk/$1'); //detail product
$routes->post('/penjual/product/create', 'Penjual_product_create::index'); // create
$routes->post('/penjual/product/update/(:num)', 'Penjual_product_update::index/$1'); // edit

//  <-----------------Users Page Display------------------>
$routes->get('/users', 'Penjual_display_page::users');