<?php

declare(strict_types=1);

namespace App\Domains\Personaje\ValueObjects;

use App\Domains\Personaje\ValueObjects\Recursos\Energia;
use App\Domains\Personaje\ValueObjects\Recursos\Experiencia;
use App\Domains\Personaje\ValueObjects\Recursos\Salud;

final class Recursos
{
    public function __construct(
        private readonly Salud $salud,
        private readonly Energia $energia,
        private readonly Experiencia $experiencia,
    ) { }


}
