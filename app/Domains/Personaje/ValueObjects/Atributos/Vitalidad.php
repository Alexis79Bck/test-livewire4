<?php

declare(strict_types=1);

namespace App\Domains\Personaje\ValueObjects\Atributos;

class Vitalidad extends AtributoNumerico
{
    public function __construct(
        private readonly int $valor
    ) {
        $this->validarNoNegativo($valor, 'Vitalidad');
    }

    public function valor(): int
    {
        return $this->valor;
    }

    public function incrementar(int $cantidad): self
    {
        return new self($this->valor + $cantidad);
    }
}
