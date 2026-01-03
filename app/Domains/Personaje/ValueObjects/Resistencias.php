<?php

declare(strict_types=1);

namespace App\Domains\Personaje\ValueObjects;

use App\Domains\Personaje\ValueObjects\Resistencias\Agua;
use App\Domains\Personaje\ValueObjects\Resistencias\Aire;
use App\Domains\Personaje\ValueObjects\Resistencias\Frio;
use App\Domains\Personaje\ValueObjects\Resistencias\Fuego;
use App\Domains\Personaje\ValueObjects\Resistencias\Rayo;
use App\Domains\Personaje\ValueObjects\Resistencias\Tierra;
use App\Domains\Personaje\ValueObjects\Resistencias\Veneno;

final class Resistencias
{
    public function __construct( 
        private readonly Agua $agua, 
        private readonly Fuego $fuego, 
        private readonly Aire $aire, 
        private readonly Tierra $tierra,
        private readonly Frio $frio,
        private readonly Rayo $rayo,
        private readonly Veneno $veneno
         )
    {}

    // Getters para cada Resistencia
    public function agua(): Agua
    {
        return $this->agua;
    }

     public function fuego(): Fuego
    {
        return $this->fuego;
    }

     public function aire(): Aire
    {
        return $this->aire;
    }

     public function tierra(): Tierra
    {
        return $this->tierra;
    }

     public function frio(): Frio
    {
        return $this->frio;
    }

     public function rayo(): Rayo
    {
        return $this->rayo;
    }

     public function veneno(): Veneno
    {
        return $this->veneno;
    }

}
