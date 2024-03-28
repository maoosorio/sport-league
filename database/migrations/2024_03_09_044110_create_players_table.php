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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->integer('number');
            $table->string('birthdate');
            $table->string('player_photo_path', 2048)->nullable();
            $table->unsignedBigInteger('id_league');
            $table->foreign('id_league')->references('id')->on('leagues');
            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('teams');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
