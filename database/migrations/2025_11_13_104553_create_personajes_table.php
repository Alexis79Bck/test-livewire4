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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 12)->unique();
            $table->foreignId('user_id')->constrained('user');
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->foreignId('clase_id')->constrained('clases');
            $table->foreignId('biografia_id')->constrained('biografias');
            // $table->enum('tipo', ['heroe', 'villano']);
            // $table->enum('clase', ['guerrero', 'mago', 'arquero', 'pícaro', 'clérigo']);
            $table->integer('nivel')->default(1);
            $table->integer('experiencia')->default(1);
            $table->integer('salud')->default(100);
            $table->integer('energia')->default(50);
            // $table->integer('ataque')->default(10);
            // $table->integer('defensa')->default(5);
            // $table->text('habilidades')->nullable();
            // $table->text('biografia')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
