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
            'group' => 'root',
            'is_default' => true
        ]);

        $developer->givePermissionTo([
            'read-dashboard',
            'read-roles', 'create-roles', 'update-roles', 'delete-roles'
        ]);
    }
}
