<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadaoEstrangeiro extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'nacionalidade',
        'nome_pai',
        'nome_mae',
        'num_passporte',
        'num_registo',
        'data_emissao',
        'data_caducidade',
        'local_residente',
        'visto',
    ];
}
