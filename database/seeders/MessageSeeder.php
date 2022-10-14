<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    public function run()
    {
        Message::factory() ->count(10)
        ->state(new Sequence(
            fn () => [
                'sender_id' => User::all()->random(),
            ],
        ))
            ->create();
    }
}
