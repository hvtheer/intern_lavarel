<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SchoolSeeder::class,
            UserSeeder::class,
            PermissionGroupSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            UsersRoleSeeder::class,
            TagSeeder::class,
            TaggableSeeder::class,
            RolesPermissionSeeder::class,
            AttachmentSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
