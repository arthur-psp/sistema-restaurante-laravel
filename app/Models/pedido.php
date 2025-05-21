<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    protected $table = "pedidos";

    protected $primaryKey = 'id_mesa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_cliente',
        'id_mesa',
        'data_hora',
        'status',
    ];
}
