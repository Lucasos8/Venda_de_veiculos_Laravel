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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->integer('ano');
            $table->string('marca', 50);
            $table->string('cilindrada', 10);
            $table->string('descrição',500);
            $table->float('valor');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    
        Schema::dropIfExists('veiculos');
    }
};
