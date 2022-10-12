<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<=10; $i++) {
            DB::table('users_roles') -> insert([
                'user_id' => User::select('id')->orderByRaw("RANDOM()")->first()->id,
                'roles_id' => Role::select('id')->orderByRaw("RANDOM()")->first()->id,
                'created_at' => now(),
                'updated_at'=> now(),
            ]);
        }
    }
}
