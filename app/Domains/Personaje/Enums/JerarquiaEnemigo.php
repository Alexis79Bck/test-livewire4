<?php

namespace App\Domains\Personaje\Enums;

enum JerarquiaEnemigo: string
{
    case NORMAL      = 'normal';
    case EXCEPCIONAL = 'excepcional';
    case ELITE       = 'elite';
    case UNICO       = 'unico';
    case LEGENDARIO       = 'legendario';
    case ANCESTRAL       = 'ancestral';
    case SUBJEFE     = 'subjefe';
    case JEFE        = 'jefe';

    public function multiplicadorExperiencia(): float
    {
        return match ($this) {
            self::NORMAL      => 1.0,
            self::EXCEPCIONAL => 1.4,
            self::ELITE       => 1.8,
            self::UNICO       => 2.2,
            self::SUBJEFE     => 3.0,
            self::JEFE        => 4.0,
            self::LEGENDARIO        => 6.5,
            self::ANCESTRAL        => 9.0,
        };
    }
}
