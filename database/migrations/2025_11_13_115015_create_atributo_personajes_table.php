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
        Schema::create('atributo_personajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atributo_id')->constrained('atributos')->cascadeOnDelete();
            $table->foreignId('personaje_id')->constrained('personajes')->cascadeOnDelete();
            $table->integer('valor')->default(0);
            $table->timestamps();

            $table->unique(['personaje_id', 'atributo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atributo_personajes');
    }
};
