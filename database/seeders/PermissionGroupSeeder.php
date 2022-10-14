<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;

class PermissionGroupSeeder extends Seeder
{
    public function run()
    {
        PermissionGroup::factory()->count(10)->create();
    }
}
