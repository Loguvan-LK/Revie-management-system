<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\User;

class CardSeeder extends Seeder
{
    public function run()
    {
        Card::factory(10)->create();
    }
}
