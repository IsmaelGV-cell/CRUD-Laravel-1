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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('imagen',100)->nullable(true);
            $table->string('username',50)->nullable(true);
            $table->string('password',200)->nullable(true);
            $table->string('token',200)->nullable(true);
            $table->string('nombres',100)->nullable(true);
            $table->tinyInteger('disponible')->nullable(false)->default(1);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
