<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function mappingStore()
    {
        
        return view('vw_login');
    }
}