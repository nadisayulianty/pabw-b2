<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// List Dosen
$routes->get('list_dosen', 'ListDosen::index');
$routes->get('list_dosen/(:segment)/preview', 'ListDosen::preview/$1');
$routes->add('list_dosen/new', 'ListDosen::create');
$routes->add('list_dosen/(:segment)/edit', 'ListDosen::edit/$1');
$routes->get('list_dosen/(:segment)/delete', 'ListDosen::delete/$1');
$routes->get('list_dosen/cari', 'ListDosen::cari');

// List Uji Mahasiswa
$routes->get('list_uji_mahasiswa', 'ListUjiMahasiswa::index');
$routes->get('list_uji_mahasiswa/(:segment)/preview', 'ListUjiMahasiswa::preview/$1');
$routes->add('list_uji_mahasiswa/new', 'ListUjiMahasiswa::create');
$routes->add('list_uji_mahasiswa/(:segment)/edit', 'ListUjiMahasiswa::edit/$1');
$routes->get('list_uji_mahasiswa/(:segment)/delete', 'ListUjiMahasiswa::delete/$1');
$routes->get('list_uji_mahasiswa/cari', 'ListUjiMahasiswa::cari');

// Perhitungan SKS
$routes->get('perhitungansks', 'Perhitungansks::index');
$routes->get('perhitungansks/(:segment)/preview', 'Perhitungansks::preview/$1');
$routes->add('perhitungansks/new', 'Perhitungansks::create');
$routes->add('perhitungansks/(:segment)/edit', 'Perhitungansks::edit/$1');
$routes->get('perhitungansks/(:segment)/delete', 'Perhitungansks::delete/$1');
$routes->get('perhitungansks/cari', 'Perhitungansks::cari');