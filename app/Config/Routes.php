<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', '/dashboard');
$routes->get('/dashboard', 'Dashboard::index');
/** routes dashboard */


// routes login dan register(sign up)
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login/index', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

$routes->get('/role-access', 'RoleMenu::index');
$routes->post('/save-role-access', 'RoleMenu::update');

$routes->get("/impersonate-sql",'Sql::impersonate');

// grup routes table
$routes->group('table', function ($routes) {
	 $dirs = array_diff(scandir(__DIR__ . '/Routes'), ['.', '..']);

    foreach ($dirs as $directory) {
        $subPath = __DIR__ . '/Routes' . '/' . $directory;

        if (is_dir($subPath)) {
            $files = array_diff(scandir($subPath), ['.', '..']);
            foreach ($files as $file) {
                $filePath = $subPath . '/' . $file;

                if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
                    include_once($filePath);
                }
            }
        }
    }
});
