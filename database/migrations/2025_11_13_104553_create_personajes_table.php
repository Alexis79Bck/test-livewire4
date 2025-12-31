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
            $table->uuid('uuid')->unique();
            $table->string('nombre', 12)->unique();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('tipo_id')->constrained('tipos')->restrictOnDelete();
            $table->foreignId('clase_id')->constrained('clases')->restrictOnDelete();
            $table->foreignId('biografia_id')->nullable()->constrained('biografias');
            $table->unsignedInteger('nivel')->default(1);
            $table->unsignedInteger('experiencia')->default(1);
            $table->unsignedInteger('salud')->default(100);
            $table->unsignedInteger('energia')->default(50);
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
