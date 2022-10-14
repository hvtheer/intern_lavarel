<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\PermissionGroup;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::factory()
            ->count(10)
            ->state(new Sequence(
                fn () => [
                    'permission_group_id' => PermissionGroup::all()->random(),
                ],
            ))
            ->create();
    }
}
