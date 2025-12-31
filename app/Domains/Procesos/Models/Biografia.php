<?php

namespace App\Domains\Procesos\Models;

use App\Domains\Personaje\Models\Clase;
use App\Domains\Personaje\Models\Personaje;
use App\Domains\Personaje\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biografia extends Model
{
    use HasFactory;
    protected $fillable = ['clase_id', 'tipo_id', 'titulo', 'contenido'];

    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function personajes()
    {
        return $this->hasMany(Personaje::class);
    }
}
