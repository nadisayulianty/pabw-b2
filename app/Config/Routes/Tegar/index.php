<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// tabel list-nilai-perkuliahan-kelas
$routes->get('list-nilai-perkuliahan-kelas', 'listNilaiPerkuliahanKelas::index');
$routes->get('list-nilai-perkuliahan-kelas/(:segment)/preview', 'listNilaiPerkuliahanKelas::preview/$1');
$routes->add('list-nilai-perkuliahan-kelas/new', 'listNilaiPerkuliahanKelas::create');
$routes->add('list-nilai-perkuliahan-kelas/(:segment)/edit', 'listNilaiPerkuliahanKelas::edit/$1');
$routes->get('list-nilai-perkuliahan-kelas/(:segment)/delete', 'listNilaiPerkuliahanKelas::delete/$1');

// tabel profil-pt
$routes->get('profil-pt', 'profilPt::index');
$routes->get('profil-pt/(:segment)/preview', 'profilPt::preview/$1');
$routes->add('profil-pt/new', 'profilPt::create');
$routes->add('profil-pt/(:segment)/edit', 'profilPt::edit/$1');
$routes->get('profil-pt/(:segment)/delete', 'profilPt::delete/$1');

// tabel list-mata-kuliah
$routes->get('list-mata-kuliah', 'listMataKuliah::index');
$routes->get('list-mata-kuliah/(:segment)/preview', 'listMataKuliah::preview/$1');
$routes->add('list-mata-kuliah/new', 'listMataKuliah::create');
$routes->add('list-mata-kuliah/(:segment)/edit', 'listMataKuliah::edit/$1');
$routes->get('list-mata-kuliah/(:segment)/delete', 'listMataKuliah::delete/$1');