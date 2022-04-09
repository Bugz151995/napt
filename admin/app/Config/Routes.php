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
$routes->setDefaultMethod('showLogin');
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
$routes->get('auctions'       , 'Pages::showAuctions');
$routes->get('users'          , 'Pages::showUsers');

$routes->group('inventory', function($routes){
    $routes->post('create', 'Inventory::create');
    $routes->post('update', 'Inventory::update');
    $routes->get('(:num)/(:num)', 'Inventory::updateStock/$1/$2');
    $routes->post('delete', 'Inventory::delete');
    $routes->post('fetch/(:num)', 'Inventory::fetch/$1');
});

$routes->group('auctions', function($routes){
    $routes->post('create', 'Auction::create');
    $routes->post('feature', 'Auction::addToFeatured');
    $routes->post('rm_feat', 'Auction::removeFromFeatured');
    $routes->post('delete', 'Auction::delete');
    $routes->post('fetch/(:num)', 'Auction::fetch/$1');

    $routes->group('lot', function($routes){
        $routes->get('(:num)', 'Pages::showLot/$1');

        $routes->post('delete', 'Lot::delete');
    });
});

$routes->group('users', function($routes){
    $routes->post('approve', 'User::approve');
    $routes->post('unblock', 'User::unblock');
    $routes->post('block'  , 'User::block');
    $routes->post('deny'   , 'User::deny');
    $routes->post('update' , 'User::update');
    $routes->post('delete' , 'User::delete');
    $routes->post('fetch/(:num)', 'User::fetch/$1');
});

$routes->post('login', 'Admin::login');
$routes->get('logout', 'Admin::logout');

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
