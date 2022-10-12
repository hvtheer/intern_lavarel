<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SchoolSeeder::class,
            TagSeeder::class,
            TaggableSeeder::class,
            RoleSeeder::class,
            UsersRoleSeeder::class,
            PermissionSeeder::class,
            RolePermissionSeeder::class,
            PermissionsGroupSeeder::class,
            AttachmentSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
