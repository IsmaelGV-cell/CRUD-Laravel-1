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
        Schema::create('etiquetas_preguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etiquetas_id');

            $table->foreign('etiquetas_id')->references('id')->on('etiquetas')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('preguntas_id');

            $table->foreign('preguntas_id')->references('id')->on('preguntas')->onUpdate('cascade')->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_pregunta');
    }
};
