<?php

namespace App\Http\Controllers\Backend\CompanyValidation;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CompanyValidationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Validasi Ekraf',
            'mods' => 'validation'
        ];

        return customView('validation.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Company::where('status', 'pending')->with('category')->get())
            ->editColumn('logo', function ($data) {
                return asset('storage/images/companies/logo/' . $data->logo);
            })
            ->make();
    }

    public function detail(Company $company)
    {
        $data = [
            'title' => 'Detail Ekraf',
            'data' => $company
        ];

        return customView('validation.detail', $data, 'backend');
    }

    public function approved(Company $company)
    {
        try {
            $company->update(['status' => 'approved']);
            return $this->successResponse('Data berhasil tervalidasi');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }
}
