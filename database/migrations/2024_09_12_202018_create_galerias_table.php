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
        Schema::create('galerias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                ->references('id')->on('categories');
            $table->timestamps();
            $table->string('titulo');
            $table->string('imagen');
            $table->string('estado');
            $table->string('registradoPor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerias');
    }
};
