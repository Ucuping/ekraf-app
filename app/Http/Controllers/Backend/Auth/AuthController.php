<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        // return dd(auth()->user());
        $data = [
            'title' => 'Login'
        ];
        return customView('auth.index', $data);
    }

    public function check()
    {
        return customView('layouts.content-wrapper');
    }
}
