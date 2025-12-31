<?php

namespace App\Models;

use App\Domains\Procesos\Models\Biografia;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Personaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'clase_id', 'tipo_id', 'biografia_id',
        'nombre', 'nivel', 'experiencia', 'salud', 'energia', 'activo'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid();
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function clase()
    {
        return $this->belongsTo(Clase::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function biografia()
    {
        return $this->belongsTo(Biografia::class);
    }

    public function atributos()
    {
        return $this->belongsToMany(Atributo::class)
                    ->using(AtributoPersonaje::class)
                    ->withPivot('valor')
                    ->withTimestamps();
    }

    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class)
                    ->using(HabilidadPersonaje::class)
                    ->withPivot('nivel', 'desbloqueada')
                    ->withTimestamps();
    }
}
