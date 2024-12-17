<?php

namespace App\Libraries;

use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;
use CodeIgniter\Exceptions\PageNotFoundException;

class MyCustomErrorHandler
{
    public function handleException(\Throwable $exception)
    {
        if ($exception instanceof PageNotFoundException) {
            echo "Custom 404 Page: The page you are looking for does not exist!";
        } else {
            echo view('errors/impersonate');
        }
    }
}
