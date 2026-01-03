<?php

namespace App\Domains\Personaje\Progressions;

use App\Domains\Personaje\Enums\JerarquiaEnemigo;

final class Encuentro
{
    public function __construct(
        public readonly int $nivelEnemigo,
        public readonly JerarquiaEnemigo $jerarquia,
        public readonly int $cantidad
    ) {}
}
