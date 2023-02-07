<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
$role = "";
if (session()->get('role') == 1) {
    $role = 'admin';
} elseif (session()->get('role') == 2) {
    $role = 'rete';
} elseif (session()->get('role') == 3) {
    $role = 'rewe';
} else {
    $role = 'dkm';
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
///////////////////////////////////////////////
// }
$routes->get('/', 'Home::index_');
$routes->get('/register', 'Registrasi::regis');
$routes->post('/register', 'Registrasi::register');
$routes->get('/login', 'Login::index');
$routes->post('/logon', 'Login::logon',);
$routes->get('/logout', 'Auth::logout',);

//ADMIN
$routes->get('/admin', 'Admin::index');
$routes->get($role . '/data_penduduk',  'Admin::tambah_data_penduduk',);
$routes->post('/save_data', 'Admin::data_warga');
$routes->post('/rt', 'Admin::rt');
$routes->get($role . '/tambah_data_rt', 'Admin::tambah_data_rt',);
$routes->post('/rw', 'Admin::rw');
$routes->get($role . '/tambah_data_rw', 'Admin::tambah_data_rw',);
$routes->post('/kecamatan', 'Admin::kecamatan');
$routes->get($role . '/tambah_data_kecamatan', 'Admin::tambah_data_kecamatan',);
$routes->post('/kelurahan', 'Admin::kelurahan');
$routes->get($role . '/tambah_data_kelurahan', 'Admin::tambah_data_kelurahan',);
$routes->post('/provinsi', 'Admin::provinsi');
$routes->get($role . '/tambah_data_provinsi', 'Admin::tambah_data_provinsi',);
$routes->post('/data_kk', 'Admin::data_kk');
$routes->get($role . '/tambah_data_kk', 'Admin::tambah_data_kk',);
$routes->get($role . '/buat_akun', 'Admin::buat_akun',);
$routes->post('/tambah_akun', 'Admin::t_akun',);
$routes->get($role . '/data_penduduk/(:segment)',  'Admin::update_data_dokumen/$1',);
$routes->post('/save_data', 'Admin::data_warga');


//RT
$routes->get('/rete', 'Rete::indexrt');
$routes->get($role . '/tambah_data_warga', $role . '::tambah_data_warga');

//RW
$routes->get('/rewe', 'Rewe::indexrw');

//DKM
$routes->get('/dkm', 'Dkm::dkm');

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
