<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'tipo', 'clase_id', 'tipo_id', 'descripcion'
    ];
}
