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
            ['name' => 'read-dashboard', 'label' => 'Baca Dashboard', 'group' => null],

            # Users related permission
            ['name' => 'read-users', 'label' => 'Baca User', 'group' => null],
            ['name' => 'create-users', 'label' => 'Buat User', 'group' => null],
            ['name' => 'update-users', 'label' => 'Edit User', 'group' => null],
            ['name' => 'delete-users', 'label' => 'Hapus User', 'group' => null],

            # Roles related permission
            ['name' => 'read-roles', 'label' => 'Baca Role', 'group' => null],
            ['name' => 'create-roles', 'label' => 'Buat Role', 'group' => null],
            ['name' => 'update-roles', 'label' => 'Edit Role', 'group' => null],
            ['name' => 'delete-roles', 'label' => 'Hapus Role', 'group' => null],
            ['name' => 'change-role', 'label' => 'Edit Hak Akses', 'group' => null],

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
