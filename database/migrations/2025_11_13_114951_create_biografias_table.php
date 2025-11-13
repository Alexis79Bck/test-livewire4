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
        Schema::create('biografias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clase_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tipo_id')->constrained()->cascadeOnDelete();
            $table->string('titulo');
            $table->text('bio');
            $table->timestamps();

            $table->unique(['clase_id', 'tipo_id']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biografias');
    }
};
