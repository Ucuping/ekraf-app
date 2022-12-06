<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UserRequest;
use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'User',
            'mods' => 'user'
        ];

        return customView('user.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(User::whereHas('roles', function ($q) {
            $q->where('name', '!=',  'Developer');
        })->where('id', '!=', getInfoLogin()->id)->with('roles'))
            ->editColumn('picture', function ($data) {
                return asset('storage/images/users/' . $data->picture);
            })
            ->make(true);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah User',
            // 'mods' => 'user'
            'action' => route('apps.users.store'),
            'roles' => Role::where('name', '!=', 'Developer')->get(),
        ];

        return customView('user.partials.form', $data, 'backend');
    }

    public function store(UserRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = randomFileName('Users', $file);
                $file->move(public_path('storage/images/users/'), $fileName);
            } else {
                $fileName = 'default.jpg';
            }

            $request->merge([
                'picture' => $fileName,
                'password' => Hash::make($request->password)
            ]);

            User::create($request->only(['name', 'identity_number', 'username', 'email', 'password', 'picture', 'is_active']))->assignRole($request->role);

            return $this->successResponse('Data user berhasil ditambahkan');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function edit(User $user)
    {
        $user->roles = $user->roles;
        $data = [
            'title' => 'Edit User',
            'data' => $user,
            'action' => route('apps.users.update', $user->hashid),
            'roles' => Role::where('name', '!=', 'Developer')->get(),
        ];

        return customView('user.partials.form', $data, 'backend');
    }

    public function update(User $user, UserRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                if (file_exists(public_path('storage/images/users/' . $user->picture))) {
                    if ($user->picture != 'default.jpg') {
                        File::delete(public_path('storage/images/users/' . $user->picture));
                    }
                }

                $file = $request->file('image');
                $fileName = randomFileName('Users', $file);
                $file->move(public_path('storage/images/users'), $fileName);
            } else {
                $fileName = $user->picture;
            }
            $request->merge([
                'picture' => $fileName,
            ]);
            $user->update($request->only(['name', 'username', 'email', 'identity_number', 'is_active', 'picture']));
            $user->syncRoles($request->role);

            return $this->successResponse('Data user berhasil diupdate');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function destroy(User $user)
    {
        try {
            if (file_exists(public_path('storage/images/users/' . $user->picture))) {
                if ($user->picture != 'default.jpg') {
                    File::delete(public_path('storage/images/users/' . $user->picture));
                }
            }

            $user->delete();

            return $this->successResponse('Data user berhasil dihapus');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }
}
