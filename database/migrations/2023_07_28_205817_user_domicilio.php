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
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->references('id')
                ->on('users');
            $table->text('domicilio');
            $table->integer('numero_exterior');
            $table->string('colonia');
            $table->integer('cp');
            $table->text('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_domicilio');
    }
};
