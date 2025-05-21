<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemPedido extends Model
{
    /** @use HasFactory<\Database\Factories\itemPedidoFactory> */
    use HasFactory;

    protected $table = "item_pedido";

    protected $primaryKey = 'id_item_pedido';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pedido',
        'id_produto',
        'quantidade',
        'total',
    ];
}
