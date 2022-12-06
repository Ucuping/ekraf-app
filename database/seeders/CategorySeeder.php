<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Startup'
            ],
            [
                'name' => 'Arsitektur'
            ],
            [
                'name' => 'Desain Interior'
            ],
            [
                'name' => 'Musik'
            ],
            [
                'name' => 'Seni Rupa'
            ],
            [
                'name' => 'Desain Produk'
            ],
            [
                'name' => 'Fashion'
            ],
            [
                'name' => 'Kuliner'
            ],
            [
                'name' => 'Animasi dan Video'
            ],
            [
                'name' => 'Fotografi'
            ],
            [
                'name' => 'Desain Komunikasi Visual'
            ],
            [
                'name' => 'Televisi dan Radio'
            ],
            [
                'name' => 'Kriya'
            ],
            [
                'name' => 'Periklanan'
            ],
            [
                'name' => 'Seni Pertunjukan'
            ],
            [
                'name' => 'Aplikasi dan Game'
            ],
        ]);
    }
}
