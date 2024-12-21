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
    $routes->get('', 'ActivityController::index');
    $routes->get('(:segment)/preview', 'ActivityController::preview/$1');
    $routes->add('new', 'ActivityController::store');
    $routes->add('(:segment)/edit', 'ActivityController::edit/$1');
    $routes->get('(:segment)/delete', 'ActivityController::delete/$1');
});

$routes->group('Academy', ['namespace' => 'App\Controllers\Alghi\Academy'], function($routes) {
    $routes->get('', 'AcademyController::index');
    $routes->get('(:segment)/preview', 'AcademyController::preview/$1');
    $routes->add('new', 'AcademyController::store');
    $routes->add('(:segment)/edit', 'AcademyController::edit/$1');
    $routes->get('(:segment)/delete', 'AcademyController::delete/$1');
});

