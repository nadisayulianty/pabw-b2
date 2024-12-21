<?php

use App\Controllers\Rasyad\Wilayah;
use App\Controllers\Rasyad\JenisKeluar;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Rasyad\ListAktivitasMahasiswa;

/**
 * @var RouteCollection $routes
 */

$routes->get('wilayah', [Wilayah::class, 'index']);
$routes->add('wilayah/save', [Wilayah::class, 'save']);
$routes->get('wilayah/(:segment)/delete', [Wilayah::class, 'delete/$1']);

$routes->get('jenis-keluar', [JenisKeluar::class, 'index']);
$routes->add('jenis-keluar/save', [JenisKeluar::class, 'save']);
$routes->get('jenis-keluar/(:segment)/delete', [JenisKeluar::class, 'delete/$1']);

$routes->get('list-aktivitas-mahasiswa', [ListAktivitasMahasiswa::class, 'index']);
$routes->add('list-aktivitas-mahasiswa/save', [ListAktivitasMahasiswa::class, 'save']);
$routes->get('list-aktivitas-mahasiswa/(:segment)/delete', [ListAktivitasMahasiswa::class, 'delete/$1']);
