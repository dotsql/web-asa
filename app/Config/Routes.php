<?php

namespace Config;

use Template;
use App\Models\Maplikasi;
use App\Models\Mmenu;
use App\Models\Mkelas;
use App\Models\Mtahun;

$this->Maplikasi = new Maplikasi();
$this->Mmenu = new Mmenu();
$this->Mkelas = new Mkelas();
$this->Mtahun = new Mtahun();
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
$routes->setDefaultController('Website');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
   // utama
   $d['classhead'] = 'green';
   $d['aplikasi'] = $this->Maplikasi->data();
   $app = $d['aplikasi']->getrow();
   $d['title'] = "Home";
   $d['ogtitle'] = $app->nama_app;
   $d['ogdescription'] = $app->deskripsi_app;
   $d['ogimage'] = base_url($app->logo_app);
   $d['ogurl'] = base_url();
   $d['menu'] = $this->Mmenu->dataparent();
   $d['kelas'] = $this->Mkelas->data();
   $d['aktif'] = $this->Mtahun->dataaktif()->getrowarray();

   return Template::website('website/404', $d);
});
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Website::index');
$routes->get('/masukadmin', 'Login::index');
$routes->post('/authlogin', 'Login::authlogin');
$routes->get('/logout', 'Login::logout');
$routes->get('/acara', 'Website::acara');
$routes->get('/lihat/(:any)', 'Website::lihatacara');
$routes->get('/artikel', 'Website::artikel');
$routes->get('/baca/(:any)', 'Website::lihatartikel');
$routes->get('/kategori/(:any)', 'Website::kategori');
$routes->get('/page/(:any)', 'Website::page');
$routes->get('/kontak', 'Website::kontak');
$routes->get('/sendemail', 'Setting::pesankontak');
$routes->post('/sendemail', 'Setting::pesankontak');
$routes->get('/foto', 'Website::foto');
$routes->get('/video', 'Website::video');
$routes->get('/ppdb', 'Ppdb::login');
$routes->get('/search', 'Website::search');

$routes->group('midtrans', function ($routes) {

   /**
    * ROUTES GROUP SNAP
    */
   $routes->group('snap', ['namespace' => 'Codenom\MidtransSampleData\Controllers\Snap'], function ($subroutes) {

      //route to: http://<base_url>/midtrans/snap
      $subroutes->get('midtrans/Snap', 'Snap::index');
      $subroutes->get('midtrans/token', 'Snap::token');
      //can't access with method Get URL, only method Post submit from checkout page
      $subroutes->post('midtrans/finish', 'Snap::attemptOrder');
   });

   /**
    * ROUTES GROUP TRANSACTION
    */
   $routes->group('transaction', ['namespace' => 'Codenom\MidtransSampleData\Controllers\Transaction'], function ($subroutes) {

      //route to: http:<base_url>/midtrans/transaction
      $subroutes->get('midtrans/Transaction', 'Transaction::index');
      //can't access with method Get URL, only method Post submit from transaction page
      $subroutes->post('', 'Transaction::attemptTransaction');
   });

   /**
    * ROUTES GROUP VTDIRECT
    */
   $routes->group('vtdirect', ['namespace' => 'Codenom\MidtransSampleData\Controllers\Vtdirect'], function ($subroutes) {

      //route to: http:<base_url>/midtrans/vtdirect
      $subroutes->get('midtrans/Vtdirect', 'Vtdirect::index');
      //can't access with method Get URL, only method Post submit from vtdirect page
      $subroutes->post('/midtrans/token', 'Vtdirect::token');
   });

   /**
    * ROUTES GROUP VTWEB
    */

   $routes->group('vtweb', ['namespace' => 'Codenom\MidtransSampleData\Controllers\Vtweb'], function ($subroutes) {
      $subroutes->get('midtrans/VtWeb', 'Vtweb::index');
      $subroutes->post('midtrans/redirected', 'Vtweb::redirected');
   });

   /**
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
});
