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
        Schema::create('player_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_league');
            $table->unsignedBigInteger('id_team');
            $table->unsignedBigInteger('id_player');
            $table->foreign('id_team')->references('id')->on('teams');
            $table->foreign('id_player')->references('id')->on('players');
            $table->foreign('id_league')->references('id')->on('leagues');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_team');
    }
};
