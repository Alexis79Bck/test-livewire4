<?php

namespace App\Domains\Personaje\Definitions;

final class CurvaExperienciaBase
{
    /**
     * Retorna la experiencia necesaria para alcanzar el siguiente nivel.
     */
    public static function experienciaParaSubirANivel(int $nivelActual): int
    {
        return (int) round(
            100 * pow($nivelActual, 1.5)
        );
    }
}
