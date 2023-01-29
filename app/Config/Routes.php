<?php

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index_');
$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->get('/rete', 'Login::rete', ['as' => 'login RT']);
$routes->get('/rewe', 'Login::rewe', ['as' => 'login RW']);
$routes->get('/kbm', 'Login::dkm', ['as' => 'login DKM']);
//AUTH 
$routes->get('/register', 'auth::regis');
$routes->post('/register', 'auth::register');
$routes->post('/logon', 'auth::logon',);
$routes->get('/logout', 'auth::logout',);
$routes->get('/buat_akun', 'auth::buat_akun',);
$routes->post('/tambah_akun', 'auth::t_akun',);
//ADMIN
$routes->get('/admin', 'admin::index', ['filter' => 'checkauth']);
$routes->get('/data_penduduk', 'admin::tambah_data_penduduk',);
$routes->post('/save_data', 'admin::data_warga');


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