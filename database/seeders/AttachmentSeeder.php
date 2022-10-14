<?php

namespace Database\Seeders;

use App\Models\Attachment;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    public function run()
    {
        Attachment::factory()->count(20)->create();
    }
}
