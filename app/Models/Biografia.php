<?php

namespace App\Domains\Procesos\Models;

use App\Models\Clase;
use App\Models\Personaje;
use App\Models\Tipo;
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
