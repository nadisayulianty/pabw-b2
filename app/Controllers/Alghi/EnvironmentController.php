<?php namespace App\Controllers\Alghi;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Model;

//defined('BASEPATH') OR exit('No direct script access allowed');
class EnvironmentController extends BaseController
{
    protected static $__model;

    public function __construct($model) {
        if (!static::$__model) $this->resolveModel($model);
    }

    private function resolveModel($model)  : void {
        static::$__model = new $model;
    }

    public function getModel() : Model {
        return static::$__model;
    }

}