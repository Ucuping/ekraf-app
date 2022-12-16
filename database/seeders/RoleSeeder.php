<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = Role::create([
            'name' => 'Developer',
            'guard_name' => 'web',
            // 'group' => 'root',
            // 'is_default' => true
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        $ekraf = Role::create([
            'name' => 'Ekraf',
            'guard_name' => 'web'
        ]);

        $developer->givePermissionTo([
            'read-dashboard',
            // 'read-roles', 'create-roles', 'update-roles', 'delete-roles',
            // 'change-permissions',
            // 'read-users', 'create-users', 'update-users', 'delete-users',
            'read-categories',
            'read-companies', 'create-companies', 'update-companies',
            'company-validations',
        ]);

        $admin->givePermissionTo([
            'read-dashboard',
            'read-categories',
            'company-validations'
        ]);

        $ekraf->givePermissionTo([
            'read-dashboard',
            'read-companies', 'create-companies', 'update-companies'
        ]);
    }
}
