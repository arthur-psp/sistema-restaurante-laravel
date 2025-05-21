<?php

namespace Database\Factories;

use App\Models\cliente;
use App\Models\mesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_cliente'=> cliente::inRandomOrder()->firstOr()->id_cliente,
            'id_mesa'=> mesa::inRandomOrder()->firstOr()->id_mesa,
            'data_hora'=>$this->faker->dateTime(),
            'status'=>$this->faker->randomElement(['pendente', 'em preparo', 'concluído']),

        ];
    }
}
