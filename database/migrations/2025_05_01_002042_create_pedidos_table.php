<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id_pedido');

            $table->unsignedBigInteger('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');

            $table->unsignedBigInteger('id_mesa')->unsigned();
            $table->foreign('id_mesa')->references('id_mesa')->on('mesa');

            $table->dateTime('data_hora');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
