<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::factory()
            ->count(10)
            ->state(new Sequence(
                fn () => [
                    'permission_group_id' => PermissionGroup::all()->random,
                ],
            ))
            ->create();
    }
}
