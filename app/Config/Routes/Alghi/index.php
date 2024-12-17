<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->group('mahasiswa', ['namespace' => 'App\Controllers\Alghi\MahasiswaManagement'], function ($routes) {
    $routes->get('', 'MahasiswaController::index');
    $routes->get('(:segment)/preview', 'MahasiswaController::preview/$1');
    $routes->add('new', 'MahasiswaController::store');
    $routes->add('(:segment)/edit', 'MahasiswaController::edit/$1');
    $routes->get('(:segment)/delete', 'MahasiswaController::delete/$1');
});

$routes->group('activity', ['namespace' => 'App\Controllers\Alghi\Activity'], function($routes) {
    $routes->get('', 'MahasiswaController::index');
    $routes->get('(:segment)/preview', 'MahasiswaController::preview/$1');
    $routes->add('new', 'MahasiswaController::store');
    $routes->add('(:segment)/edit', 'MahasiswaController::edit/$1');
    $routes->get('(:segment)/delete', 'MahasiswaController::delete/$1');
});

$routes->group('academy', ['namespace' => 'App\Controllers\Alghi\Academy'], function($routes) {
    $routes->get('', 'MahasiswaController::index');
    $routes->get('(:segment)/preview', 'MahasiswaController::preview/$1');
    $routes->add('new', 'MahasiswaController::store');
    $routes->add('(:segment)/edit', 'MahasiswaController::edit/$1');
    $routes->get('(:segment)/delete', 'MahasiswaController::delete/$1');
});

