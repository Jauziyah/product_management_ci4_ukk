<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth')->routes($routes);

$routes->get('/', 'Home::index');

// <-----------------Penjual Page Display------------------>
$routes->group('penjual', ['filter' => 'group:user'], function ($routes): void {
    $routes->get('/', 'Penjual_display_page::index');
    $routes->get('product', 'Penjual_display_page::product');
    $routes->get('product/edit/(:any)', 'Penjual_display_page::edit_product/$1');
    $routes->get('product/tambah', 'Penjual_display_page::create_product');
    $routes->get('/users', 'Penjual_display_page::users');

    // <-----------------CRUD Method Penjual Produk------------------>
    $routes->get('/product/(:num)', 'Penjual_product_delete::index/$1'); // delete
    $routes->get('/product/(:any)', 'Penjual_display_page::detail_produk/$1'); //detail product
    $routes->post('/product/create', 'Penjual_product_create::index'); // create
    $routes->post('/product/update/(:num)', 'Penjual_product_update::index/$1'); // edit
});

$routes->group('admin', ['filter' => 'group:admin'], function($routes): void{

    $routes->get('/', 'Admin_display_page::index');

});

