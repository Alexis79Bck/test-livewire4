<?php

namespace App\Domains\Personaje\Entities;

use App\Domains\Personaje\ValueObjects\{
    Fuerza,
    Inteligencia,
    Agilidad,
    Vitalidad,
    Suerte,
    PoderMagico,
    Salud,
    Energia,
    Experiencia
};
use App\Domains\Personaje\ValueObjects\Resistencias;

final class Personaje
{
     private string $nombre;
    private int $nivel;

    private Fuerza $fuerza;
    private Inteligencia $inteligencia;
    private Agilidad $agilidad;
    private Vitalidad $vitalidad;
    private Suerte $suerte;
    private PoderMagico $poderMagico;

    private Salud $salud;
    private Energia $energia;
    private Experiencia $experiencia;

    private Resistencias $resistencias;

    private function __construct(
        string $nombre,
        int $nivel,
        Fuerza $fuerza,
        Inteligencia $inteligencia,
        Agilidad $agilidad,
        Vitalidad $vitalidad,
        Suerte $suerte,
        PoderMagico $poderMagico,
        Salud $salud,
        Energia $energia,
        Experiencia $experiencia,
        Resistencias $resistencias
    ) {
        if ($nivel < 1) {
            throw new \InvalidArgumentException('El nivel inicial debe ser mayor o igual a 1.');
        }

        $this->nombre = $nombre;
        $this->nivel = $nivel;

        $this->fuerza = $fuerza;
        $this->inteligencia = $inteligencia;
        $this->agilidad = $agilidad;
        $this->vitalidad = $vitalidad;
        $this->suerte = $suerte;
        $this->poderMagico = $poderMagico;

        $this->salud = $salud;
        $this->energia = $energia;
        $this->experiencia = $experiencia;

        $this->resistencias = $resistencias;
    }

    /**
     * Punto único de creación de un personaje base.
     */
    public static function crearBase(
        string $nombre,
        Fuerza $fuerza,
        Inteligencia $inteligencia,
        Agilidad $agilidad,
        Vitalidad $vitalidad,
        Suerte $suerte,
        PoderMagico $poderMagico,
        Salud $salud,
        Energia $energia,
        Experiencia $experiencia,
        Resistencias $resistencias
    ): self {
        return new self(
            $nombre,
            1,
            $fuerza,
            $inteligencia,
            $agilidad,
            $vitalidad,
            $suerte,
            $poderMagico,
            $salud,
            $energia,
            $experiencia,
            $resistencias
        );
    }

    // =========================
    // COMPORTAMIENTO DE DOMINIO
    // =========================

    public function ganarExperiencia(int $cantidad, int $xpParaSiguienteNivel): void
    {
        $this->experiencia = $this->experiencia->ganar($cantidad);

        if ($this->experiencia->puedeSubirNivel()) {
            $this->subirNivel($xpParaSiguienteNivel);
        }
    }

    private function subirNivel(int $xpParaSiguienteNivel): void
    {
        $this->nivel++;

        $this->experiencia = $this->experiencia
            ->resetearTrasSubirNivel($xpParaSiguienteNivel);

        // NOTA:
        // El incremento de atributos / recursos
        // se delegará a un servicio o calculator.
    }

    // =========================
    // QUERIES (LECTURA)
    // =========================

    public function nivel(): int
    {
        return $this->nivel;
    }

    public function nombre(): string
    {
        return $this->nombre;
    }

    public function salud(): Salud
    {
        return $this->salud;
    }

    public function energia(): Energia
    {
        return $this->energia;
    }

    public function experiencia(): Experiencia
    {
        return $this->experiencia;
    }
}
