<?php

namespace App\Domains\Personaje\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clase extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Obtiene la Clase de Personaje
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personajes(): HasMany
    {
        return $this->hasMany(Personaje::class);
    }
}
