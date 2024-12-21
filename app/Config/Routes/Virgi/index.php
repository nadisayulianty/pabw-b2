<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('periode', 'Tableperiode::index');
$routes->get('periode/(:segment)/preview', 'Tableperiode::preview/$1');
$routes->add('periode/new', 'Tableperiode::create');
$routes->add('periode/edit/(:segment)', 'Tableperiode::edit/$1');
$routes->get('periode/delete/(:segment)', 'Tableperiode::delete/$1');
$routes->get('periode/cari', 'Tableperiode::cari');

$routes->get('mbd', 'Tablembd::index');
$routes->get('mbd/(:segment)/preview', 'Tablembd::preview/$1');
$routes->add('mbd/new', 'Tablembd::create');
$routes->add('mbd/edit/(:segment)', 'Tablembd::edit/$1');
$routes->get('mbd/delete/(:segment)', 'Tablembd::delete/$1');
$routes->get('mbd/cari', 'Tablembd::cari');

$routes->get('rfd', 'Tablerfd::index');
$routes->get('rfd/preview/(:segment)', 'Tablerfd::preview/$1');
$routes->add('rfd/new', 'Tablerfd::create');
$routes->add('rfd/edit/(:segment)', 'Tablerfd::edit/$1');
$routes->get('rfd/delete/(:segment)', 'Tablerfd::delete/$1');
$routes->get('rfd/cari', 'Tablerfd::cari');