<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mesa>
 */
class MesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'id_mesa'=>$this->faker->numerify(), //laravel cria sozinho
            'numero'=>$this->faker->numerify(),
            'capacidade'=>$this->faker->numerify(),
        ];
    }
}
