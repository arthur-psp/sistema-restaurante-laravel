<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'id_cliente'=>$this->faker->numerify(), //laravel cria sozinho
            'nome'=>$this->faker->name(),
            'telefone'=>$this->faker->phoneNumber(),
        ];
    }
}
