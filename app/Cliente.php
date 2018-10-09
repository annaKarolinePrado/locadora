<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[
        'id_cliente',
        'nome',
        'cpf',
        'data_nasc',
        'telefone',
        'email',
        'endereco'
    ];
    protected $table = 'cliente';
}
