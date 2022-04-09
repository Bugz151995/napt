<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('home');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/'       , 'UserPages::home');
$routes->get('login'   , 'UserPages::login');
$routes->post('login'  , 'User::login');

$routes->get('sign-up' , 'UserPages::signup');
$routes->post('sign-up', 'User::signup');
$routes->get('account' , 'UserPages::account');
$routes->get('logout'  , 'User::logout');

$routes->group('auctions' , function($routes){
    $routes->get('/'          , 'UserPages::auctions');
    $routes->get('lot/(:num)' , 'UserPages::lot/$1');
});
$routes->get('biding'    , 'UserPages::biding');
$routes->get('watchlist' , 'UserPages::watchlist');
$routes->get('about_us'  , 'UserPages::aboutUs');

$routes->group('biding' , function($routes){
    $routes->post('create' , 'Bidding::create');
});

$routes->group('watchlist' , function($routes){
    $routes->post('create' , 'Watchlist::create');
});

$routes->group('account' , function($routes){
    $routes->post('update_pic' , 'User::updateProfilePicture');
});

/**
 * Admin routes
 */
$routes->group('admin' , function($routes){
    $routes->get('auction' , 'AdminPages::auctions');
    $routes->get('users' , 'AdminPages::users');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}