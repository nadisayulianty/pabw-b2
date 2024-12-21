<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// tabel tableDetailKelasKuliah
	$routes->get('tableDetailKelasKuliah', 'DetailKelasKuliah::index');
    $routes->get('tableDetailKelasKuliah/(:segment)/preview', 'DetailKelasKuliah::preview/$1');
    $routes->add('tableDetailKelasKuliah/new', 'DetailKelasKuliah::create');
    $routes->add('tableDetailKelasKuliah/(:segment)/edit', 'DetailKelasKuliah::edit/$1');
    $routes->get('tableDetailKelasKuliah/(:segment)/delete', 'DetailKelasKuliah::delete/$1');
    $routes->get('tableDetailKelasKuliah/cari', 'DetailKelasKuliah::cari');

	// tabel RiwayatNilaiMahasiswa
	$routes->get('tableRiwayatNilaiMahasiswa', 'RiwayatNilaiMahasiswa::index');
    $routes->get('tableRiwayatNilaiMahasiswa/(:segment)/preview', 'RiwayatNilaiMahasiswa::preview/$1');
    $routes->add('tableRiwayatNilaiMahasiswa/new', 'RiwayatNilaiMahasiswa::create');
    $routes->add('tableRiwayatNilaiMahasiswa/(:segment)/edit', 'RiwayatNilaiMahasiswa::edit/$1');
    $routes->get('tableRiwayatNilaiMahasiswa/(:segment)/delete', 'RiwayatNilaiMahasiswa::delete/$1');
    $routes->get('tableRiwayatNilaiMahasiswa/cari', 'RiwayatNilaiMahasiswa::cari');

	// tabel DetailPerkuliahanMahasiswa
	$routes->get('tableDetailPerkuliahanMahasiswa', 'DetailPerkuliahanMahasiswa::index');
    $routes->get('tableDetailPerkuliahanMahasiswa/(:segment)/preview', 'DetailPerkuliahanMahasiswa::preview/$1');
    $routes->add('tableDetailPerkuliahanMahasiswa/new', 'DetailPerkuliahanMahasiswa::create');
    $routes->add('tableDetailPerkuliahanMahasiswa/(:segment)/edit', 'DetailPerkuliahanMahasiswa::edit/$1');
    $routes->get('tableDetailPerkuliahanMahasiswa/(:segment)/delete', 'DetailPerkuliahanMahasiswa::delete/$1');
    $routes->get('tableDetailPerkuliahanMahasiswa/cari', 'DetailPerkuliahanMahasiswa::cari');