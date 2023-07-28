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
        Schema::create('user_domicilios', function (Blueprint $table) {
            $table->id('user_id');
            $table->text('domicilio');
            $table->integer('numero_exterior');
            $table->string('colonia');
            $table->string('cp');
            $table->text('ciudad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_domicilios');
    }
};
