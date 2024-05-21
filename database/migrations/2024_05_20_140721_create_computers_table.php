<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 100);
            $table->string('marca', 100);
            $table->string('tamaño', 50);
            $table->string('codigo', 100)->unique();
            $table->enum('sistema_operativo', ['Windows', 'macOS', 'Linux', 'Otro']);
            $table->timestamps();    
            // Índices
            $table->index('marca');
            $table->index('sistema_operativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
};
