<?php
namespace Database\Factories;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory {
    protected $model = Room::class;

    public function definition() {
        return [
            'description' => $this->faker->paragraph(1),
            'number'      => $this->faker->unique()->randomDigit(2),
            'status'      => $this->faker->boolean(),
            'notes'       => $this->faker->paragraph(2)
        ];
    }
}
