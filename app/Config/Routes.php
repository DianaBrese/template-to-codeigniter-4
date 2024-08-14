<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Search::index');
$routes->get('/banner/home', 'BannerHome::index');
$routes->get('/trendings', 'Trending::index');
$routes->get('/recent', 'Recent::index');
$routes->get('/category/(:alpha)', 'Category::index/$1');
