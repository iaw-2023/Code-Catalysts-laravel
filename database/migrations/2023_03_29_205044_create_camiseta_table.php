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
        Schema::create('camiseta', function (Blueprint $table) {
            $table->id('id_camiseta');
            $table->text('descripcion');
            $table->unsignedInteger('precio');
            $table->string('talles');
            $table->longText('imagen');
            $table->unsignedBigInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipo');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camiseta');
    }
};
