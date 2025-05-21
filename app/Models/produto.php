<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    /** @use HasFactory<\Database\Factories\ProdutoFactory> */
    use HasFactory;

    protected $table = "produto";

    protected $primaryKey = 'id_produto';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_produto',
        'nome',
        'preco',
        'descricao',

    ];
}
