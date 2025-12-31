<?php

namespace App\Domains\Personaje\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtributoPersonaje extends Model
{
    use HasFactory;
    protected $table = 'atributo_personaje';
    protected $fillable = ['personaje_id', 'atributo_id', 'valor'];
}
