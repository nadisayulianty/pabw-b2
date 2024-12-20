<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Tabel Riwayat Pangkat Dosen
$routes->get('tableriwayatpangkatdosen', 'TableRiwayatPangkatDosen::index');
    $routes->get('tableriwayatpangkatdosen/(:segment)/preview', 'TableRiwayatPangkatDosen::preview/$1');
    $routes->add('tableriwayatpangkatdosen/new', 'TableRiwayatPangkatDosen::create');
    $routes->add('tableriwayatpangkatdosen/(:segment)/edit', 'TableRiwayatPangkatDosen::edit/$1');
    $routes->get('tableriwayatpangkatdosen/(:segment)/delete', 'TableRiwayatPangkatDosen::delete/$1');


    // Tabel Riwayat Sertifikasi Dosen
	$routes->get('tableriwayatsertifikasidosen', 'TableRiwayatSertifikasiDosen::index');
    $routes->get('tableriwayatsertifikasidosen/(:segment)/preview', 'TableRiwayatSertifikasiDosen::preview/$1');
    $routes->add('tableriwayatsertifikasidosen/new', 'TableRiwayatSertifikasiDosen::create');
    $routes->add('tableriwayatsertifikasidosen/(:segment)/edit', 'TableRiwayatSertifikasiDosen::edit/$1');
    $routes->get('tableriwayatsertifikasidosen/(:segment)/delete', 'TableRiwayatSertifikasiDosen::delete/$1');

    //Tabel List Anggota Aktivitas Mahasiswa
	$routes->get('tablelistanggotaaktivitasmahasiswa', 'TableListAnggotaAktivitasMahasiswa::index');
    $routes->get('tablelistanggotaaktivitasmahasiswa/(:segment)/preview', 'TableListAnggotaAktivitasMahasiswa::preview/$1');
    $routes->add('tablelistanggotaaktivitasmahasiswa/new', 'TableListAnggotaAktivitasMahasiswa::create');
    $routes->add('tablelistanggotaaktivitasmahasiswa/(:segment)/edit', 'TableListAnggotaAktivitasMahasiswa::edit/$1');
    $routes->get('tablelistanggotaaktivitasmahasiswa/(:segment)/delete', 'TableListAnggotaAktivitasMahasiswa::delete/$1');