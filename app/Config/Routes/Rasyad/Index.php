<?php

use App\Controllers\Rasyad\JenisAktivitasMahasiswa;
use App\Controllers\Rasyad\Wilayah;
use App\Controllers\Rasyad\JenisKeluar;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('wilayah', [Wilayah::class, 'index']);
$routes->add('wilayah/save', [Wilayah::class, 'save']);
$routes->get('wilayah/(:segment)/delete', [Wilayah::class, 'delete/$1']);

$routes->get('jenis-keluar', [JenisKeluar::class, 'index']);
$routes->add('jenis-keluar/save', [JenisKeluar::class, 'save']);
$routes->get('jenis-keluar/(:segment)/delete', [JenisKeluar::class, 'delete/$1']);

$routes->get('jenis-aktivitas-mahasiswa', [JenisAktivitasMahasiswa::class, 'index']);
$routes->add('jenis-aktivitas-mahasiswa/save', [JenisAktivitasMahasiswa::class, 'save']);
$routes->get('jenis-aktivitas-mahasiswa/(:segment)/delete', [JenisAktivitasMahasiswa::class, 'delete/$1']);
