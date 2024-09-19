<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//buku
$routes->get('/', 'Home::index');
$routes->get('/perpus', 'VBuku::index');
$routes->get('/perpus/tambah', 'VBuku::tambah');
$routes->post('/perpus/edit', 'VBuku::edit/$1');
$routes->post('perpus/saveEdit/(:num)', 'VBuku::saveEdit/$1');
$routes->post('/perpus/saveTambah', 'VBuku::saveTambah');
$routes->post('/perpus/hapus', 'VBuku::hapus/$1');
//user
$routes->get('/login', 'User::login');
$routes->get('/register', 'User::signup');
$routes->post('/register/simpan', 'User::register');
$routes->get('/login/save', 'User::saveLogin');
$routes->get('/datauser', 'User::index');
$routes->post('/user/edit', 'User::edit/$1');
$routes->post('/user/saveEdit(:num)', 'User::saveEdit/$1');
$routes->post('/user/hapus', 'User::hapus/$1');
//peminjaman
$routes->get('/peminjaman', 'Peminjaman::index');
$routes->get('/peminjaman/create', 'Peminjaman::create');
$routes->post('/peminjaman/store', 'Peminjaman::store');
$routes->get('/peminjaman/edit/(:num)', 'Peminjaman::edit/$1');
$routes->post('/peminjaman/update/(:num)', 'Peminjaman::update/$1');
$routes->get('/peminjaman/delete/(:num)', 'Peminjaman::delete/$1');
