<?php

declare(strict_types=1);

namespace App\Domains\Personaje\ValueObjects;

use App\Domains\Personaje\ValueObjects\Atributos\Agilidad;
use App\Domains\Personaje\ValueObjects\Atributos\Fuerza;
use App\Domains\Personaje\ValueObjects\Atributos\Inteligencia;
use App\Domains\Personaje\ValueObjects\Atributos\PoderMagico;
use App\Domains\Personaje\ValueObjects\Atributos\Suerte;
use App\Domains\Personaje\ValueObjects\Atributos\Vitalidad;

final class Atributos
{
    public function __construct(
        private readonly Fuerza $fuerza,
        private readonly Agilidad $agilidad,
        private readonly Inteligencia $inteligencia,
        private readonly PoderMagico $poderMagico,
        private readonly Suerte $suerte,
        private readonly Vitalidad $vitalidad,
    ) 
    {}

    // Getters para cada Atributo
    public function fuerza(): Fuerza
    {
        return $this->fuerza;
    }

    // Getters para cada Resistencia
    public function agilidad(): Agilidad
    {
        return $this->agilidad;
    }

     public function inteligencia(): Inteligencia
    {
        return $this->inteligencia;
    }

     public function poderMagico(): PoderMagico
    {
        return $this->poderMagico;
    }

     public function suerte(): Suerte
    {
        return $this->suerte;
    }

     public function vitalidad(): Vitalidad
    {
        return $this->vitalidad;
    }

}
