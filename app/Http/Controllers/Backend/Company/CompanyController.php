<?php

namespace App\Http\Controllers\Backend\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Company\CompanyRequest;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ekraf',
            'mods' => 'company',
            'dataCompanyRejected' => Company::where(['user_id' => getInfoLogin()->id, 'status' => 'rejected'])->count()
        ];

        return customView('company.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Company::where('user_id', getInfoLogin()->id)->with('category')->get())
            ->editColumn('logo', function ($data) {
                return asset('storage/images/companies/logo/' . $data->logo);
            })
            ->make();
    }

    public function create(Request $request)
    {
        // return dd();
        $data = [
            'title' => (!is_null($request->query('dashboard')) and $request->query('dashboard') == true) ? 'Pendaftaran Ekraf' : 'Tambah Ekraf',
            'action' => route('apps.companies.store'),
            'categories' => Category::all()
        ];

        return customView('company.partials.form', $data, 'backend');
    }

    public function store(CompanyRequest $request)
    {
        try {
            if ($request->hasFile('ekraf_logo')) {
                $file = $request->file('ekraf_logo');
                $fileName = randomFileName('Company_logo', $file);
                $file->move(public_path('storage/images/companies/logo/'), $fileName);
            } else {
                $fileName = 'default.svg';
            }

            $request->merge([
                'logo' => $fileName,
                'user_id' => getInfoLogin()->id,
                'category_id' => $request->category
            ]);

            $company = Company::create($request->only(['user_id', 'category_id', 'name', 'owner_identification_number', 'haki_number', 'owner_name', 'address', 'description', 'logo', 'facebook_username', 'instagram_username', 'twitter_username']));

            if ($request->hasFile('image1')) {
                $file = $request->file('image1');
                $fileName = randomFileName('company_image', $file);
                $file->move(public_path('storage/images/companies/attachment/'), $fileName);

                Attachment::create([
                    'company_id' => $company->id,
                    'name' => $fileName,
                    'type' => 'image'
                ]);
            }

            if ($request->hasFile('image2')) {
                $file = $request->file('image2');
                $fileName = randomFileName('company_image', $file);
                $file->move(public_path('storage/images/companies/attachment/'), $fileName);

                Attachment::create([
                    'company_id' => $company->id,
                    'name' => $fileName,
                    'type' => 'image'
                ]);
            }
            if ($request->hasFile('image3')) {
                $file = $request->file('image3');
                $fileName = randomFileName('company_image', $file);
                $file->move(public_path('storage/images/companies/attachment/'), $fileName);

                Attachment::create([
                    'company_id' => $company->id,
                    'name' => $fileName,
                    'type' => 'image'
                ]);
            }

            return $this->successResponse('Data ekraf berhasil ditambahkan');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function edit(Company $company)
    {
        $data = [
            'title' => 'Edit Ekraf',
            'data' => $company,
            'action' => route('apps.companies.update', $company->hashid),
            'categories' => Category::all()
        ];

        return customView('company.partials.form', $data, 'backend');
    }

    public function update(Company $company, CompanyRequest $request)
    {
        try {
            DB::beginTransaction();
            if ($request->hasFile('ekraf_logo')) {
                if (file_exists(public_path('storage/images/companies/logo/' . $company->logo))) {
                    if ($company->logo != 'default.svg') {
                        File::delete(public_path('storage/images/companies/logo/' . $company->picture));
                    }
                }

                $file = $request->file('ekraf_logo');
                $fileName = randomFileName('Company_logo', $file);
                $file->move(public_path('storage/images/companies/logo/'), $fileName);
            } else {
                $fileName = $company->logo;
            }
            $request->merge([
                'logo' => $fileName,
                'category_id' => $request->category,
                'status' => 'pending',
                'message_rejected' => null
            ]);
            $company->update($request->only(['category_id', 'name', 'owner_identification_number', 'haki_number', 'owner_name', 'address', 'description', 'logo', 'facebook_username', 'instagram_username', 'twitter_username', 'status', 'message_rejected']));

            if ($request->hasFile('image1')) {
                if (count($company->attachment) > 0 and isset($company->attachment[0])) {
                    if (file_exists(public_path('storage/images/companies/attachment/' . $company->attachment[0]->name))) {
                        File::delete(public_path('storage/images/companies/attachment/' . $company->attachment[0]->name));
                    }
                    $file = $request->file('image1');
                    $fileName = randomFileName('company_image', $file);
                    $file->move(public_path('storage/images/companies/attachment/'), $fileName);

                    $company->attachment[0]->update(['name' => $fileName]);
                } else {
                    if (count($company->attachment) >= 3) {
                        return response()->json([
                            'status' => 'fail',
                            'message' => 'Gagal menambahkan gambar karena melebihi limit'
                        ], 500);
                    } else {
                        $file = $request->file('image1');
                        $fileName = randomFileName('company_image', $file);
                        $file->move(public_path('storage/images/companies/attachment/'), $fileName);
                        Attachment::create([
                            'company_id' => $company->id,
                            'name' => $fileName,
                            'type' => 'image'
                        ]);
                    }
                }
            }

            if ($request->hasFile('image2')) {
                if (count($company->attachment) > 0 and isset($company->attachment[1])) {
                    if (file_exists(public_path('storage/images/companies/attachment/' . $company->attachment[1]->name))) {
                        File::delete(public_path('storage/images/companies/attachment/' . $company->attachment[1]->name));
                    }
                    $file = $request->file('image2');
                    $fileName = randomFileName('company_image', $file);
                    $file->move(public_path('storage/images/companies/attachment/'), $fileName);

                    $company->attachment[1]->update(['name' => $fileName]);
                } else {
                    if (count($company->attachment) >= 3) {
                        return response()->json([
                            'status' => 'fail',
                            'message' => 'Gagal menambahkan gambar karena melebihi limit'
                        ], 500);
                    } else {
                        $file = $request->file('image2');
                        $fileName = randomFileName('company_image', $file);
                        $file->move(public_path('storage/images/companies/attachment/'), $fileName);
                        Attachment::create([
                            'company_id' => $company->id,
                            'name' => $fileName,
                            'type' => 'image'
                        ]);
                    }
                }
            }

            if ($request->hasFile('image3')) {
                if (count($company->attachment) > 0 and isset($company->attachment[2])) {
                    if (file_exists(public_path('storage/images/companies/attachment/' . $company->attachment[2]->name))) {
                        File::delete(public_path('storage/images/companies/attachment/' . $company->attachment[2]->name));
                    }
                    $file = $request->file('image3');
                    $fileName = randomFileName('company_image', $file);
                    $file->move(public_path('storage/images/companies/attachment/'), $fileName);

                    $company->attachment[2]->update(['name' => $fileName]);
                } else {
                    if (count($company->attachment) >= 3) {
                        return response()->json([
                            'status' => 'fail',
                            'message' => 'Gagal menambahkan gambar karena melebihi limit'
                        ], 500);
                    } else {
                        $file = $request->file('image3');
                        $fileName = randomFileName('company_image', $file);
                        $file->move(public_path('storage/images/companies/attachment/'), $fileName);
                        Attachment::create([
                            'company_id' => $company->id,
                            'name' => $fileName,
                            'type' => 'image'
                        ]);
                    }
                }
            }

            DB::commit();

            return $this->successResponse('Data ekraf berhasil diupdate');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function detail(Company $company)
    {
        $data = [
            'title' => 'Detail Ekraf',
            'mods' => 'detail_company',
            'data' => $company
        ];

        return customView('company.detail', $data, 'backend');
    }
}
