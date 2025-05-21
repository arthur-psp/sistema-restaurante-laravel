<?php

namespace Database\Seeders;

use App\Models\cliente;
use App\Models\itemPedido;
use App\Models\mesa;
use App\Models\pedido;
use App\Models\produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        cliente::factory(20)->create();
        mesa::factory(15)->create();
        pedido::factory(17)->create();
        produto::factory(30)->create();
        itemPedido::factory(5)->create();

        // pedido::factory(17)->make()->each(function ($pedido) use ($clientes, $mesas) {
        //     $pedido->id_cliente = $clientes->random()->id;
        //     $pedido->id_mesa = $mesas->random()->id;
        //     $pedido->save();
        // });

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
