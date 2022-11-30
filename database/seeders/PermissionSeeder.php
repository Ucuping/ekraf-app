<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webPermissions = collect([
            # Dahboard related permission
            ['name' => 'read-dashboard', 'label' => 'Baca Dashboard'],

            # Users related permission
            ['name' => 'read-users', 'label' => 'Baca User'],
            ['name' => 'create-users', 'label' => 'Buat User'],
            ['name' => 'update-users', 'label' => 'Edit User'],
            ['name' => 'delete-users', 'label' => 'Hapus User'],

            # Roles related permission
            ['name' => 'read-roles', 'label' => 'Baca Role'],
            ['name' => 'create-roles', 'label' => 'Buat Role'],
            ['name' => 'update-roles', 'label' => 'Edit Role'],
            ['name' => 'delete-roles', 'label' => 'Hapus Role'],
            ['name' => 'change-role', 'label' => 'Edit Hak Akses'],

        ]);

        $this->insertPermission($webPermissions);
    }

    private function insertPermission(Collection $permissions, $guardName = 'web')
    {
        Permission::insert($permissions->map(function ($permission) use ($guardName) {
            return [
                'name' => $permission['name'],
                'display_name' => $permission['label'],
                'guard_name' => $guardName,
                'created_at' => Carbon::now()
            ];
        })->toArray());
    }
}
