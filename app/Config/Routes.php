<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//======= PUBLIC PAGES ROUTES =====

// homepage route
$routes->get('/', 'Home::index');

// routes to verify id
$routes->get('/vfid/(:any)', 'Home::verify_id/$1');
$routes->post('/vfid/(:any)', 'Home::verify_id/$1');

// routes to verify report cards
$routes->get('/vfcd/(:any)', 'Home::verify_reportcard/$1');
$routes->post('/vfcd/(:any)', 'Home::verify_reportcard/$1');

$routes->post('/sent_message', 'Home::sent_message');

// login page route
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::index');
// log out route
$routes->get('/logout', 'LoginController::logout');


// ======= ADMIN PAGES ROUTES =======

$routes->group('',['filter'=>'protector'], function($routes){
  
  // dashboard - home
  $routes->get('/dashboard', 'Dashboard::index');
  
  // this routes handle institutions
  $routes->post('dashboard/add_institution', 'InstitutionController::add_institution'); // this allows you to add an institution profile
  $routes->get('dashboard/edit_institution/(:any)', 'InstitutionController::edit_institution_profile/$1'); // this allows you load and edit an edit an instution profile 
  $routes->post('dashboard/edit_institution/(:any)', 'InstitutionController::edit_institution_profile/$1'); // as mentioned above; before this line.
    
    // controllers that deal with qrcodes only 
  $routes->post('dashboard/create_qrcode', 'QrcodeController::index');
  $routes->get('vr/(:any)', 'QrcodeController::view_report_card_qrcodes/$1'); // view all report cards qrcodes under a label
  $routes->get('vi/(:any)', 'QrcodeController::view_id_card_qr_codes/$1'); // view all id cards qrcodes under a label
  $routes->get('delete_single/(:any)/(:any)', 'QrcodeController::delete_single/$1/$2'); // delete single idcard or report card qrcode
  $routes->get('delete_group/(:any)/(:any)', 'QrcodeController::delete_group/$1/$2'); // delete single idcard or report card qrcode
    // $routes->get(' dashboard/delete_qrcode/(:any)', 'QrcodeController::delete_job/$1');
   
    //user profile
  $routes->get('dashboard/profile', 'LoginController::profile');
  $routes->post('dashboard/create_user', 'LoginController::create_user');
  $routes->post('dashboard/update_password', 'LoginController::update_password');
    
  $routes->get('/dashboard/delete_user/(:any)', 'LoginController::delete_user/$1');
    
    
  });





