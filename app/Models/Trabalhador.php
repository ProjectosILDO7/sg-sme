<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabalhador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'nacionalidade',
        'num_passporte',
        'num_registo',
        'data_emissao',
        'data_caducidade',
        'residente'
    ];
    
}
