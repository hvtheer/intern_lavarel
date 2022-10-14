<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RolesPermissionSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i<=10; $i++) {
            DB::table('roles_permissions')->insert([
                'permission_id' => Permission::select('id')->orderByRaw("RANDOM()")->first()->id,
                'role_id' => Role::select('id')->orderByRaw("RANDOM()")->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
