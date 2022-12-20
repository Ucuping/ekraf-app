<?php

namespace App\Http\Controllers\Frontend\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function detail(Company $company)
    {
        $data = [
            'title' => 'Detail Ekraf',
            'data' => $company
        ];

        return view('frontend.company.detail', $data);
    }
}
