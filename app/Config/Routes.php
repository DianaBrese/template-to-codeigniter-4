<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Search::index');
$routes->get('/banner/home', 'BannerHome::index');
$routes->get('/category/sidebar/partials/(:alpha)', 'CategorySidebarPartials::index/$1');
$routes->get('/trendings', 'Trending::index');
$routes->get('/recent', 'Recent::index');
$routes->get('/category/partials/(:alpha)', 'CategoryHomePartials::index/$1');
$routes->get('/category/(:any)', 'Category::index/$1');
$routes->get('/post/(:any)', 'Post::index/$1');



