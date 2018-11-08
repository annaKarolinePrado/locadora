<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable=[
        'id_categoria',
        'nome',
        'status'        
    ];
    protected $table = 'categoria';
}
