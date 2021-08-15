<?php
namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory {
    protected $model = Client::class;
    public function definition() {
        return [
            'name'  => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'birth' => $this->faker->date(),
            'cpf'   => $this->faker->randomNumber(9),
            'notes'       => $this->faker->paragraph(2)
        ];
    }
}
