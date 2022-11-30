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
        User::create([
            'identity_number' => '12345678910',
            'name' => 'Root',
            'username' => 'root',
            'email' => 'root@example.com',
            'password' => Hash::make('root'),
            'is_active' => true,
        ])->assignRole('Developer');
    }
}
