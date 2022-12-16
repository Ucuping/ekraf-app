<?php

namespace App\Http\Controllers\Backend\CompanyValidation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CompanyValidation\CompanyValidationRequest;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use PDF;

class CompanyValidationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Validasi',
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
            'title' => 'Detail',
            'mods' => 'detail_validation',
            'data' => $company
        ];

        return customView('validation.detail', $data, 'backend');
    }

    public function approved(Company $company)
    {
        try {
            $company->update(['status' => 'approved', 'message_rejected' => null]);
            return $this->successResponse('Data berhasil diverifikasi');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function rejected(Company $company, CompanyValidationRequest $request)
    {
        try {
            $company->update(['status' => 'rejected', 'message_rejected' => $request->message]);
            return $this->successResponse('Data berhasil ditolak');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function print(Company $company)
    {
        $print = PDF::loadView('backend.company.print.index', [
            'data' => $company,
            // 'signatory' => $signatory,
            // 'bigCapital' => $bigCapital,
        ])->setPaper('a4', 'potrait');
        return $print->stream();
    }
}
