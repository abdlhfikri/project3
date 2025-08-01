<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/cart', 'Page::cart');
$routes->get('/blog', 'Page::blog');
$routes->get('/blog_single', 'Page::blog_single');
$routes->get('/checkout', 'Page::checkout');
$routes->get('/product_single', 'Page::product_single');
$routes->get('/shop', 'Shop::shop');
// $routes->get('/shop/cek', 'Shop::cek');
// $routes->group('cart', function($routes) {
//     $routes->get('/', 'CartController::index');
//     $routes->post('add', 'CartController::add');
//     $routes->post('update/(:num)', 'CartController::update/$1');
//     $routes->get('remove/(:num)', 'CartController::remove/$1');
//     $routes->get('clear', 'CartController::clear');
// });
// $routes->get('/post/(:any)', 'Post::viewPost/$1');
// $routes->group('admin', function($routes){
//     $routes->get('post', 'PostAdmin::index');
//     $routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
//     $routes->add('post/new', 'PostAdmin::create');
//     $routes->add('post/(:segment)/edit', 'PostAdmin::edit/$1');
//     $routes->get('post/(:segment)/delete', 'PostAdmin::delete/$1');
// });
