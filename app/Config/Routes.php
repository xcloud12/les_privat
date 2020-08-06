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
$routes->get('/tentor/les', 'Pages::pengajuan');
$routes->get('/tentor/profil', 'Pages::profil');
$routes->get('/tentor/kinerja', 'Pages::ulasan');
$routes->get('/peserta/profil', 'Pages::profil_peserta');
$routes->get('/peserta/kelas', 'Pages::data_les_peserta');
$routes->get('/peserta/jadwal', 'Pages::jadwal_peserta');
$routes->get('/data/jadwal', 'Pages::jadwal_admin');
$routes->get('/data/pemesanan  ', 'Pages::pemesanan_admin');

// user login, register
$routes->post('/', 'User::login');
$routes->get('/logout', 'User::logout');
$routes->post('/daftar', 'User::daftar');
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

$routes->get('/data/pemesanan', 'Admin::index/pemesanan');

// tentor
$routes->get('/les', 'Tentor::les');
$routes->post('/les/(\d+)', 'Tentor::pengajuan/$1');
$routes->put('/les/(\d+)', 'Tentor::edit_pengajuan/$1');
$routes->get('/kinerja', 'Tentor::kinerja');

// peserta
$routes->get('/kelas', 'Peserta::kelas');
$routes->post('/kelas/(\d+)', 'Peserta::ikut_kelas/$1');
$routes->put('/kelas/(\d+)', 'Peserta::update_kelas/$1');
$routes->get('/jadwal', 'Peserta::jadwal');

// khusus profil
$routes->get('/profil', 'User::profil');
$routes->put('/profil/(\d+)', 'User::update/$1');

// api for android
$routes->post('/api/login', 'Api::login');
$routes->get('/api/jadwal/(\d+)', 'Api::detailJadwal/$1');
$routes->get('/api/jadwal/(.+)', 'Api::myJadwal/$1');
$routes->get('/api/pesanan/(.+)', 'Api::daftarPesanan/$1');
$routes->get('/api/get_les_by_kategori/(.*)', 'Api::getLesByKategori/$1');
$routes->get('/api/get_les_by_name/(.*)', 'Api::getLesByName/$1');
$routes->get('/api/pesan_les/(.*)', 'Api::pesanLes/$1');
//tentor menerima pesanan & auto buat jadwal sejumlah banyak pertemuan yg diinput siswa
$routes->get('/api/terima_pesanan/(\d+)', 'Api::terimaPesanan/$1');
$routes->get('/api/tolak_pesanan/(\d+)', 'Api::tolakPesanan/$1');
//struktur rute absensi -> /api/absensi/id_jadwal/boolean-value
$routes->get('/api/absensi/(\d+)/(true|false)', 'Jadwal::absensi/$1/$2');


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
