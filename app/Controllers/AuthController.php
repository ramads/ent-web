<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index() : string
    {
        return view('auth/login');
    }

    public function doLogin() {
        return redirect()->to('/');
    }
}
