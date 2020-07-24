<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::view/home');
$routes->get('/login', 'Pages::view/login');
$routes->get('/daftar', 'Pages::index');
//test tampilan
$routes->get('/ls', 'Pages::ls');
$routes->get('/tentor/pengajuan', 'Pages::pengajuan');
$routes->get('/tentor/profil', 'Pages::profil');
$routes->get('/tentor/ulasan', 'Pages::ulasan');
$routes->get('/peserta/profil', 'Pages::profil_peserta');
$routes->get('/peserta/data_les', 'Pages::data_les_peserta');
$routes->get('/peserta/jadwal', 'Pages::jadwal_peserta');

// user login, register
$routes->post('/', 'User::login');
$routes->get('/logout', 'User::logout');
$routes->post('/submit', 'User::daftar');
$routes->get('/dashboard', 'User::index');

// update, delete data pengguna (tentor, peserta)
$routes->get('/data/tentor', 'Admin::index/tentor');
$routes->put('/data/tentor/(.*)', 'Admin::update/tentor/$1');
$routes->delete('/data/tentor/(.*)', 'Admin::delete/tentor/$1');
$routes->get('/data/peserta', 'Admin::index/peserta');
$routes->put('/data/peserta/(.*)', 'Admin::update/peserta/$1');
$routes->delete('/data/peserta/(.*)', 'Admin::delete/peserta/$1');

// list, tambah, update, delete data les
$routes->get('/data/les', 'Les::index');
$routes->post('/data/les', 'Les::create');
$routes->put('/data/les/(.*)', 'Les::update/$1');
$routes->delete('/data/les/(.*)', 'Les::delete/$1');

// master data pengajuan
$routes->get('/data/pengajuan', 'Pengajuan::index');    // list all
$routes->put('/data/pengajuan/(\d+)', 'Pengajuan::update/$1');    // update

// jadwal
$routes->get('/data/jadwal', 'Jadwal::index');
$routes->post('/data/jadwal', 'Jadwal::create'); // dilakukan otomatis ketika tentor menyetujui pemesanan les
$routes->delete('/data/jadwal/(\d+)', 'Jadwal::delete'); // menandai bahwa les sudah selesai

$routes->get('/data/pemesanan', 'Admin::index');

// tentor
$routes->get('/les', 'Tentor::les');
$routes->post('/les', 'Tentor::pengajuan');
$routes->put('/les/(\d+)', 'Tentor::edit_pengajuan/$1');
$routes->get('/kinerja', 'Tentor::kinerja');

// peserta
$routes->get('/kelas', 'Peserta::kelas');
$routes->post('/kelas', 'Peserta::ikut_kelas');
$routes->put('/kelas/(\d+)', 'Peserta::ikut_kelas/$1');
$routes->get('/jadwal', 'Peserta::jadwal');

// khusus profil
$routes->get('/profil', 'User::profil/tentor');
$routes->put('/profil/(\d+)', 'User::update/$1');

// api for android
$routes->post(
    '/api/login',
    'Api::login'
);



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
