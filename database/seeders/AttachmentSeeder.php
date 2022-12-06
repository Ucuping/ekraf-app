<?php

namespace Database\Seeders;

use App\Models\Attachment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attachment::insert([
            [
                'company_id' => 1,
                'name' => 'attachment1.jpg',
                'type' => 'image'
            ],
            [
                'company_id' => 1,
                'name' => 'attachment2.jpg',
                'type' => 'image'
            ],
            [
                'company_id' => 1,
                'name' => 'attachment3.jpg',
                'type' => 'image'
            ],
        ]);
    }
}
