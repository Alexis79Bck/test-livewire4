<?php

namespace App\Domains\Personaje\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabilidadPersonaje extends Model
{
    use HasFactory;
    protected $table = 'habilidad_personaje';
    protected $fillable = ['personaje_id', 'habilidad_id', 'nivel', 'desbloqueada'];
}
