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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('player_id');
            $table->string('action');
            $table->integer('value');
            $table->string('time');
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('player_id')->references('id')->on('players');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
