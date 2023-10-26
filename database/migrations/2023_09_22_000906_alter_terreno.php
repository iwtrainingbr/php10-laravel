<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('terreno', function (Blueprint $table) {
            $table->string('nome', 50)->change();
        });
    }

    
    public function down(): void
    {
        Schema::table('terreno', function (Blueprint $table) {
            $table->string('nome', 255)->change();
        });
    }
};
