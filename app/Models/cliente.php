<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;

    protected $table = 'cliente'; //por convenção é no plural
    protected $primaryKey = 'id_cliente';
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        //'id_cliente',
        'nome',
        'telefone',
    ];
}
