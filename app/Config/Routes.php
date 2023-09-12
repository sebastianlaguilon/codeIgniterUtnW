<?php

//use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

/*-------------------- copy-------*/

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

$routes->get('/producto', 'Producto::index');

//$routes->get('/producto/new', 'Producto::create');
//$routes->get('/pelicula/edit/(:num)', 'Pelicula::create/$1');

$routes->presenter('producto');



/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/producto/(:num)', 'Productos::show/$1');
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$1/$2');

$routes->get('/stock', 'StockController::index');
$routes->get('/stock/verDetalle/(:num)', 'StockController::verDetalle/$1');
$routes->get('/stock/actualizarStock/(:num)', 'StockController::actualizarStockForm/$1');
$routes->post('/stock/actualizarStock/(:num)', 'StockController::actualizarStock/$1');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
