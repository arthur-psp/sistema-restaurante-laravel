<?php

namespace Database\Factories;

use App\Models\pedido;
use App\Models\produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemPedido>
 */
class ItemPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pedido'=> pedido::inRandomOrder()->firstOr()->id_pedido,
            'id_produto'=> produto::inRandomOrder()->firstOr()->id_produto,
            'quantidade'=>$this->faker->numberBetween(0, 10),
            'total'=>$this->faker->randomElement([60.00, 35.00, 25.00, 25.50, 43.20, 36.50])
        ];
    }
}
