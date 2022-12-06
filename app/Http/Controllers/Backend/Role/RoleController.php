<?php

namespace App\Http\Controllers\Backend\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Role\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Role',
            'mods' => 'role'
        ];

        return customView('role.index', $data, 'backend');
    }

    public function getData()
    {
        return DataTables::of(Role::where('name', '!=', 'Developer'))->make();
    }

    public function store(RoleRequest $request)
    {
        try {
            Role::create([
                'name' => $request->name,
                'guard_name' => 'web',
            ]);

            return $this->successResponse('Data role berhasil ditambahkan');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function show(Role $role)
    {
        return $this->successResponse(null, compact('role'));
    }

    public function update(Role $role, Request $request)
    {
        try {
            $role->update($request->only(['name']));
            return $this->successResponse('Data role berhasil diupdate');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function destroy(Role $role)
    {
        try {
            $role->delete();

            return $this->successResponse('Data role berhasil dihapus');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function getPermissions(Role $role)
    {
        $remappedPermissions = [];
        $permissions = Permission::all();

        foreach ($permissions as $permission) {
            $explodePermissions = explode('-', $permission->name);
            $slicePermissions = array_slice($explodePermissions, 1);
            $implodePermissions = implode('-', $slicePermissions);
            $remappedPermissions[$implodePermissions][] = $permission;
        }


        $data = [
            'title' => 'Edit Hak Akses',
            'mods' => 'role',
            'role' => $role,
            'permissions' => $remappedPermissions
        ];

        return customView('role.permission', $data, 'backend');
    }

    public function changePermissions(Request $request, Role $role)
    {
        try {
            $role->syncPermissions($request->permission);
            return $this->successResponse('Data hak akses berhasil diupdate');
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }
}
