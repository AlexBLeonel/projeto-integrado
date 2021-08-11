<?php

namespace Database\Factories;

use App\Models\Rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomsFactory extends Factory
{

    protected $model = Rooms::class;

    public function definition()
    {
        return [
            'description' => $this->faker->paragraph(1),
            'number'      => $this->faker->randomDigit(2),
        ];
    }
}
