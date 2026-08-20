<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaInterna extends Model
{
    protected $table = 'notas_internas';

    protected $fillable = [
        'codigo',
        'referencia',
        'caso',
        'titulo',
        'prioridad',
        'stock',
    ];
}