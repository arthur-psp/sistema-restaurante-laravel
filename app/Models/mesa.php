<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    /** @use HasFactory<\Database\Factories\MesaFactory> */
    use HasFactory;

    protected $table = 'mesa';

    protected $primaryKey = 'id_mesa';
    public $incrementing = false;

    protected $keyType = 'string';
    protected $fillable = [
        //'id_mesa',
        'numero',
        'capacidade',
    ];
}
