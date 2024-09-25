<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/dashboard', 'PagesController::index');
$routes->get('/', 'PublicController::utama');
$routes->get('/public/sejarah', 'PublicController::sejarah');
$routes->get('/public/pemain', 'PublicController::pemain');
$routes->get('/public/pengurus', 'PublicController::pengurus');
$routes->get('/public/pendaftaran', 'PublicController::createCalon');
$routes->post('/public/store', 'PublicController::storeCalon');
$routes->get('/public/prestasi', 'PublicController::prestasi');
$routes->get('/public/struktur', 'PublicController::struktur');
$routes->get('/public/jadwal_turnamen', 'PublicController::jadwal');
$routes->get('/public/latihan', 'PublicController::latihan');
$routes->get('/pengurus', 'PagesController::pengurus');
$routes->get('/pengurus/create', 'PagesController::createPengurus');
$routes->post('/pengurus/store', 'PagesController::storePengurus');
$routes->get('/pengurus/edit/(:num)', 'PagesController::editPengurus/$1');
$routes->post('/pengurus/update/(:num)', 'PagesController::updatePengurus/$1');
$routes->get('/pengurus/delete/(:num)', 'PagesController::deletePengurus/$1');
$routes->get('/pemain', 'PagesController::pemain');
$routes->get('/pemain/create', 'PagesController::create');
$routes->post('/pemain/store', 'PagesController::store');
$routes->get('/pemain/edit/(:num)', 'PagesController::edit/$1');
$routes->post('/pemain/update/(:num)', 'PagesController::update/$1');
$routes->get('/pemain/delete/(:num)', 'PagesController::delete/$1');
$routes->get('/pemain/print/(:num)', 'PagesController::print/$1');
$routes->get('/calon', 'PagesController::calon');
$routes->get('/calon/create', 'PagesController::createCalon');
$routes->post('/calon/store', 'PagesController::storeCalon');
$routes->get('/calon/edit/(:segment)', 'PagesController::editCalon/$1');
$routes->post('/calon/update/(:segment)', 'PagesController::updateCalon/$1');
$routes->get('/calon/delete/(:segment)', 'PagesController::deleteCalon/$1');
$routes->get('/calon/accept/(:segment)', 'PagesController::acceptCalon/$1');
$routes->get('/calon/reject/(:segment)', 'PagesController::rejectCalon/$1');
$routes->get('jadwal_turnamen', 'JadwalController::jadwal');
$routes->get('jadwal_turnamen/create', 'JadwalController::create');
$routes->post('jadwal_turnamen/store', 'JadwalController::store');
$routes->get('jadwal_turnamen/edit/(:num)', 'JadwalController::edit/$1');
$routes->post('jadwal_turnamen/update/(:num)', 'JadwalController::update/$1');
$routes->get('jadwal_turnamen/delete/(:num)', 'JadwalController::delete/$1');
$routes->get('/contact', 'Contact::index');
$routes->post('/contact/submit', 'Contact::submit');


$routes->get('/players', 'PlayerController::index');


$routes->post('/players/add', 'PlayerController::add');


$routes->post('/authenticate', 'AuthController::authenticate');

$routes->get('/users/create', 'AuthController::create');
$routes->post('/users/store', 'AuthController::store');
$routes->get('/login', 'AuthController::login');
$routes->post('/login/auth', 'AuthController::auth');
$routes->get('/logout', 'AuthController::logout');
