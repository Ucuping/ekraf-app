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
            // ['name' => 'read-users', 'label' => 'Baca User'],
            // ['name' => 'create-users', 'label' => 'Buat User'],
            // ['name' => 'update-users', 'label' => 'Edit User'],
            // ['name' => 'delete-users', 'label' => 'Hapus User'],

            // # Roles related permission
            // ['name' => 'read-roles', 'label' => 'Baca Role'],
            // ['name' => 'create-roles', 'label' => 'Buat Role'],
            // ['name' => 'update-roles', 'label' => 'Edit Role'],
            // ['name' => 'delete-roles', 'label' => 'Hapus Role'],
            // ['name' => 'change-permissions', 'label' => 'Edit Hak Akses'],

            # Companies related permission
            ['name' => 'read-companies', 'label' => 'Baca Perusahaan'],
            ['name' => 'create-companies', 'label' => 'Buat Perusahaan'],
            ['name' => 'update-companies', 'label' => 'Edit Perusahaan'],
            // ['name' => 'delete-companies', 'label' => 'Hapus Perusahaan'],

            # Categories related permission
            ['name' => 'read-categories', 'label' => 'Baca Kategori Ekraf'],
            // ['name' => 'create-categories', 'label' => 'Buat Kategori Ekraf'],
            // ['name' => 'update-categories', 'label' => 'Edit Kategori Ekraf'],
            // ['name' => 'delete-categories', 'label' => 'Hapus Kategori Ekraf'],

            // # Announcements related permission
            // ['name' => 'read-announcements', 'label' => 'Baca Berita'],
            // ['name' => 'create-announcements', 'label' => 'Buat Berita'],
            // ['name' => 'update-announcements', 'label' => 'Edit Berita'],
            // ['name' => 'delete-announcements', 'label' => 'Hapus Berita'],

            # Company Validation related permission
            ['name' => 'company-validations', 'label' => 'Validasi Ekraf'],
            // ['name' => 'create-company-validations', 'label' => 'Buat Validasi Ekraf'],
            // ['name' => 'update-company-validations', 'label' => 'Edit Validasi Ekraf'],
            // ['name' => 'delete-company-validations', 'label' => 'Hapus Validasi Ekraf'],

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
