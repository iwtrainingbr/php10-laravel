<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('terreno', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cidade');
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('terreno');
    }
};
