<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
$role="";
if(session()->('role') == 1){
    $role = 'admin';
}elseif(session()->get('role') == 2){
    $role = 'rete';
    dd(Session()->get('role'));
}
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
$routes->post('/rt', 'admin::rt');
$routes->get('/tambah_data_rt', 'admin::tambah_data_rt',);
$routes->post('/rw', 'admin::rw');
$routes->get('/tambah_data_rw', 'admin::tambah_data_rw',);
$routes->post('/kecamatan', 'admin::kecamatan');
$routes->get('/tambah_data_kecamatan', 'admin::tambah_data_kecamatan',);
$routes->post('/kelurahan', 'admin::kelurahan');
$routes->get('/tambah_data_kelurahan', 'admin::tambah_data_kelurahan',);
$routes->post('/provinsi', 'admin::provinsi');
$routes->get('/tambah_data_provinsi', 'admin::tambah_data_provinsi',);
$routes->post('/data_kk', 'admin::data_kk');
$routes->get('/tambah_data_kk', 'admin::tambah_data_kk',);


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