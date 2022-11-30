<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return dd(getUserPermissions());
        $data = [
            'title' => 'Dashboard'
        ];

        return customView('dashboard.index', $data);
    }
}
