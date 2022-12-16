<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Charts\MonthlyUsersChart;
use App\Charts\YearlyCompanyChart;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(YearlyCompanyChart $chart)
    {
        // return dd(Company::where('status', 'rejected')->count());
        if (getInfoLogin()->roles[0]->name == 'Ekraf') {
            $data = [
                'title' => 'Beranda'
            ];

            return customView('dashboard.company.index', $data, 'backend');
        } else {
            // return dd(date('Y') + 1);
            $data = [
                'title' => 'Dashboard',
                'companyCount' => Company::count(),
                'pendingCount' => Company::where('status', 'pending')->count(),
                'approvedCount' => Company::where('status', 'approved')->count(),
                'rejectedCount' => Company::where('status', 'rejected')->count(),
                'chart' => $chart->build()
            ];

            return customView('dashboard.index', $data, 'backend');
        }
    }
}
