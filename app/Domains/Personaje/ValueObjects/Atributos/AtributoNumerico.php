<?php

namespace App\Domains\Personaje\ValueObjects\Atributos;

use InvalidArgumentException;

abstract class AtributoNumerico
{
    protected function validarNoNegativo(int $valor, string $nombre): void
    {
        if ($valor < 0) {
            throw new InvalidArgumentException("$nombre no puede ser negativo.");
        }
    }


}
