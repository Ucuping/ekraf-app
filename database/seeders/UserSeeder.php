<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = User::create([
            'identity_number' => '12345678910',
            'name' => 'Root',
            'username' => 'root',
            'email' => 'root@example.com',
            'password' => Hash::make('root'),
            'is_active' => true,
        ])->assignRole('Developer');

        $admin = User::create([
            'identity_number' => '1234567',
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@ekraf.com',
            'password' => Hash::make('admin'),
            'is_active' => true,
        ])->assignRole('Admin');

        $ekraf = User::create([
            'identity_number' => '12345678',
            'name' => 'Demo Ekraf',
            'username' => 'demo',
            'email' => 'ekraf@ekraf.com',
            'password' => Hash::make('1234'),
            'is_active' => true,
        ])->assignRole('Ekraf');
    }
}
