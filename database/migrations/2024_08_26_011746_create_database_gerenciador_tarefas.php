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
        Schema::create('none', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->dateTime('data_criacao');
        });
    }

    /**
     
     *Reverse the migrations.*/
    public function down(): void
    {
        Schema::dropIfExists('none');
    }
};
