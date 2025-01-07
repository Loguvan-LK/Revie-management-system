<?php
// In database/factories/CardFactory.php

namespace Database\Factories;

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
