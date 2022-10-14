<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\School;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(10)
            ->state(new Sequence(
                fn () => [
                    'school_id' => School::all()->random(),
                ],
            ))
            ->create();

        DB::table('users')->insert([
                'username' => 'admin',
                'type' => '1',
                'name' => 'admin',
                'email' => 'root@gmail.com',
                'password' => bcrypt('123@123'),
            ]);
    }
}
