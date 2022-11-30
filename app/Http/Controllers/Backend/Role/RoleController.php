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
            'title' => 'Roles',
            'mods' => 'role'
        ];

        return customView('role.index', $data);
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
                'group' => $request->group
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
            $role->update($request->only(['name', 'group']));
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
        try {
            $remappedPermissions = [];
            $permissions = Permission::all();

            $permissions->map(function ($permission) use ($role, $remappedPermissions) {
                $explodePermissions = explode('-', $permission->name);
                $slicePermissions = array_slice($explodePermissions, 1);
                $implodePermissions = implode('-', $slicePermissions);
                $permission['is_checked'] = $role->hasPermissionTo($permission->name);
                $remappedPermissions[$implodePermissions][] = $permission;
            });

            $data = [
                'role' => $role,
                'permissions' => $remappedPermissions
            ];

            return $this->successResponse(null, $data);
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }

    public function changePermissions(Request $request, Role $role)
    {
        try {
            $role->syncPermissions($request->permission);
        } catch (Exception $e) {
            return $this->exceptionResponse($e);
        }
    }
}
