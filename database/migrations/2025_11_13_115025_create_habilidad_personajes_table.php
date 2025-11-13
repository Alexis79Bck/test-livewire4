<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habilidad_personajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habilidad_id')->constrained()->cascadeOnDelete();
            $table->foreignId('personaje_id')->constrained()->cascadeOnDelete();
            $table->integer('nivel')->default(1);
            $table->boolean('desbloqueada')->default(false);
            $table->timestamps();

            $table->unique(['personaje_id', 'habilidad_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habilidad_personajes');
    }
};
