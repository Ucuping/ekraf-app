<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            [
                'user_id' => 3,
                'category_id' => 1,
                'name' => 'CV. CIPTA KARYA SEJAHTERA',
                'owner_identification_number' => '123456789',
                'owner_name' => 'Dimas Anggara',
                'address' => 'Kab. Jember',
                'description' => 'Tes Deskripsi',
            ]
        ]);
    }
}
