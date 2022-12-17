<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Charts\MonthlyUsersChart;
use App\Charts\YearlyCompanyChart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{
    public function index()
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
                // 'chart' => $chart->build()
                // 'mods' => 'dashboard'
                'categories' => Category::with('company')->get()
            ];

            return customView('dashboard.index', $data, 'backend');
        }
    }

    public function getGraphicData()
    {
        try {
            $categories = Category::with('company')->get();
            $data = [];
            // $data['modal'] = [];
            // $data['surplus'] = [];
            // $data['pades'] = [];
            $years = [];

            foreach ($categories as $item) {
                $data[$item->name][] = ['2022-01-01', 0];
                // $companies = $item->company()->where('created_at', '>=', Date('Y') - 10)->orderBy('created_at', 'asc')->get();
                // foreach ($companies as $key => $value) {
                //     # code...
                // }
                // $companyCount = $item->company()->count();

                // if ($modalCount == 0) {
                //     $data['modal'][] = [$item->period . '-01-01', 0];
                // }

                // if ($padesCount == 0) {
                //     $data['pades'][] = [$item->period . '-01-01', 0];
                // }

                // if ($padesCount == 0) {
                //     $data['surplus'][] = [$item->period . '-01-01', 0];
                // }

                // if ($item->type == 'modal') {
                //     $data['modal'][] = [$item->period . '-01-01', $item->amount];
                // }

                // if ($item->type == 'pades') {
                //     $data['pades'][] = [$item->period . '-01-01', $item->amount];
                // }

                // if ($item->type == 'surplus') {
                //     $time = '';

                //     if ($item->semester == 2) {
                //         $time = $item->period . '-06-30';
                //         $data['modal'][] = [$time, 0];
                //         $data['pades'][] = [$time, 0];
                //     } else {
                //         $time = $item->period . '-01-01';
                //     }

                //     $data['surplus'][] = [$time, $item->amount];
                //     $surplus[] = $item->period;
                // }
            }

            return $this->successResponse(null, $data);
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }
}
