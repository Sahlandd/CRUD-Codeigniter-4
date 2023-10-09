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
//tabel penduduk
$routes->get('/', 'Home::index');
$routes->get('penduduk', 'Penduduk::index');
$routes->post('penduduk/ajaxList', 'Penduduk::ajaxList');
$routes->get('add_data_penduduk', 'Penduduk::add_data_penduduk');
$routes->post('proses_add_penduduk', 'Penduduk::proses_add_penduduk');
$routes->get('edit_data_penduduk/(:any)', 'Penduduk::edit_data_penduduk/$1');
$routes->post('proses_edit_penduduk', 'Penduduk::proses_edit_penduduk');
$routes->get('delete_data_penduduk/(:any)', 'Penduduk::delete_data_penduduk/$1');
$routes->get('detail_data_penduduk/(:segment)', 'Penduduk::detail_data_penduduk/$1');

// $routes->post('upload', 'Penduduk::upload');
//end tabel penduudk
// $routes->get('upload', 'Penduduk::add_data_penduduk');
// $routes->post('upload/process', 'Penduduk::add_data_penduduk');
//$routes->get('agama', 'Agama::add_data_penduduk'); //select options agama
//$routes->get('golongan', 'Golongan::add_data_penduduk'); //select options gol darah
//$routes->get('ukuran', 'Ukuran::add_data_penduduk'); //select options uk baju
//$routes->post('/user/uploadPhoto', 'UserController::uploadPhoto'); //upload foto
// Routes.php
//upload foto
// $routes->get('/upload', 'UserController::showUploadForm');
// $routes->post('/user/save_image', 'UserController::saveImage');

// $routes->get('/upload', 'Penduduk::showUploadForm');
// $routes->post('/user/save_image', 'Penduduk::saveImage');
//agama master
$routes->get('agama', 'Agama::index');
$routes->get('add_data_agama', 'Agama::add_data_agama');
$routes->post('proses_add_agama', 'Agama::proses_add_agama');
$routes->get('edit_data_agama/(:any)', 'Agama::edit_data_agama/$1');
$routes->post('proses_edit_agama', 'Agama::proses_edit_agama');
$routes->get('delete_data_agama/(:any)', 'Agama::delete_data_agama/$1');

$routes->post('getDataAgama', 'Penduduk::getDataAgama');
//end agama master

//golongan darah master
$routes->get('golonganDarah', 'GolonganDarah::index');
$routes->get('add_data_golongan_darah', 'GolonganDarah::add_data_golongan_darah');
$routes->post('proses_add_golongan_darah', 'GolonganDarah::proses_add_golongan_darah');
$routes->get('edit_data_golongan_darah/(:any)', 'GolonganDarah::edit_data_golongan_darah/$1');
$routes->post('proses_edit_golongan_darah', 'GolonganDarah::proses_edit_golongan_darah');
$routes->get('delete_data_golongan_darah/(:any)', 'GolonganDarah::delete_data_golongan_darah/$1');
//end golongan darah master

//ukuran baju master
$routes->get('ukuranBaju', 'UkuranBaju::index');
$routes->get('add_data_ukuran_baju', 'UkuranBaju::add_data_ukuran_baju');
$routes->post('proses_add_ukuran_baju', 'UkuranBaju::proses_add_ukuran_baju');
$routes->get('edit_data_ukuran_baju/(:any)', 'UkuranBaju::edit_data_ukuran_baju/$1');
$routes->post('proses_edit_ukuran_baju', 'UkuranBaju::proses_edit_ukuran_baju');
$routes->get('delete_data_ukuran_baju/(:any)', 'UkuranBaju::delete_data_ukuran_baju/$1');
//end ukuran baju master

//document master
$routes->get('document', 'Document::index');
$routes->get('add_data_document', 'Document::add_data_document');
$routes->post('proses_add_document', 'Document::proses_add_document');
$routes->get('edit_data_document/(:any)', 'Document::edit_data_document/$1');
$routes->post('proses_edit_document', 'Document::proses_edit_document');
$routes->get('delete_data_document/(:any)', 'Document::delete_data_document/$1');

$routes->post('getDataAgama', 'Penduduk::getDataAgama');
//end document master

//masterdata kecamatan
$routes->get('kecamatan', 'Kecamatan::index');
$routes->get('add_data_kecamatan', 'Kecamatan::add_data_kecamatan');
$routes->post('proses_add_kecamatan', 'Kecamatan::proses_add_kecamatan');
$routes->get('edit_data_kecamatan/(:any)', 'Kecamatan::edit_data_kecamatan/$1');
$routes->post('proses_edit_kecamatan', 'Kecamatan::proses_edit_kecamatan');
$routes->get('delete_data_kecamatan/(:any)', 'Kecamatan::delete_data_kecamatan/$1');
//end

//masterdata kota
$routes->get('kota', 'Kota::index');
$routes->get('add_data_kota', 'Kota::add_data_kota');
$routes->post('proses_add_kota', 'Kota::proses_add_kota');
$routes->get('edit_data_kota/(:any)', 'Kota::edit_data_kota/$1');
$routes->post('proses_edit_kota', 'Kota::proses_edit_kota');
$routes->get('delete_data_kota/(:any)', 'Kota::delete_data_kota/$1');
//end

//masterdata kabupaten
$routes->get('kabupaten', 'Kabupaten::index');
$routes->get('add_data_kabupaten', 'Kabupaten::add_data_kabupaten');
$routes->post('proses_add_kabupaten', 'Kabupaten::proses_add_kabupaten');
$routes->get('edit_data_kabupaten/(:any)', 'Kabupaten::edit_data_kabupaten/$1');
$routes->post('proses_edit_kabupaten', 'Kabupaten::proses_edit_kabupaten');
$routes->get('delete_data_kabupaten/(:any)', 'Kabupaten::delete_data_kabupaten/$1');
//end

//masterdata desa
$routes->get('desa', 'Desa::index');
$routes->get('add_data_desa', 'Desa::add_data_desa');
$routes->post('proses_add_desa', 'Desa::proses_add_desa');
$routes->get('edit_data_desa/(:any)', 'Desa::edit_data_desa/$1');
$routes->post('proses_edit_desa', 'Desa::proses_edit_desa');
$routes->get('delete_data_desa/(:any)', 'Desa::delete_data_desa/$1');
//end

//wilayah
$routes->get('wilayah', 'Wilayah::index');
$routes->get('add_data_wilayah', 'Wilayah::add_data_wilayah');
$routes->post('proses_add_wilayah', 'Wilayah::proses_add_wilayah');
$routes->get('edit_data_wilayah/(:any)', 'Wilayah::edit_data_wilayah/$1');
$routes->post('proses_edit_wilayah', 'Wilayah::proses_edit_wilayah');
$routes->get('delete_data_wilayah/(:any)', 'Wilayah::delete_data_wilayah/$1');
$routes->get('detail_data_wilayah/(:segment)', 'Wilayah::detail_data_wilayah/$1');
//end

//provinsi
$routes->get('provinsi', 'Provinsi::index');
$routes->get('add_data_provinsi', 'Provinsi::add_data_provinsi');
$routes->post('proses_add_provinsi', 'Provinsi::proses_add_provinsi');
$routes->get('edit_data_provinsi/(:any)', 'Provinsi::edit_data_provinsi/$1');
$routes->post('proses_edit_provinsi', 'Provinsi::proses_edit_provinsi');
$routes->get('delete_data_provinsi/(:any)', 'Provinsi::delete_data_provinsi/$1');
//end

//select bertingkat add penduduk
$routes->post('/location/getKabupaten', 'Penduduk::getKabupaten');
$routes->post('/location/getKecamatan', 'Penduduk::getKecamatan');
$routes->post('/location/getDesa', 'Penduduk::getDesa');
//end

//select bertingkat add kecamatan
$routes->post('/location/getKabupaten', 'Kecamatan::getKabupaten');
// $routes->post('/location/getKecamatan', 'Kecamatan::getKecamatan');
// $routes->post('/location/getDesa', 'Kecamatan::getDesa');

//select bertingkat add desa
$routes->post('/location/getKabupaten', 'Desa::getKabupaten');
$routes->post('/location/getKecamatan', 'Desa::getKecamatan');
$routes->match(['get', 'post'], '/desa/add', 'Desa::add');
//$routes->post('/location/getDesa', 'Desa::getDesa');

$routes->post('chart-lahir', 'Home::showChartLahir');
$routes->post('chart-agama', 'Home::showChartAgama');

//$routes->get('/show-chart-agama', 'Home::showChartAgama');



$routes->get('index', 'User::index');

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
