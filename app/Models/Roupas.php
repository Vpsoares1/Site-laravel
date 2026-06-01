<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roupas extends Model
{
    protected $table = 'roupas';

    protected $fillable = [
        'nome',
        'descrição',
        'preço',
        'estoque',
        'tamanho',
        'peça',
    ];
}
