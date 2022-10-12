<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::factory()
            ->count(10)
            ->state(new Sequence(
                fn () => [
                    'sender_id' => User::all()->random,
                ],
            ))
            ->create();
    }
}
