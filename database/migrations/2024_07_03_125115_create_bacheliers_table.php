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
        Schema::create('bacheliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('numero_table');
            $table->string('nom');
            $table->string('prenom');
            $table->string('etablissement');
            $table->string('mention')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacheliers');
    }
};
