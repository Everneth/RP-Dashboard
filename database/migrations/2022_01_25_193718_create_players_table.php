<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->integer('player_id')->primary();
            $table->string('player_name', 25);
            $table->string('player_uuid', 36)->unique('players_uuid_UNIQUE');
            $table->bigInteger('member_id')->nullable();
            $table->bigInteger('discord_id')->nullable()->unique('discord_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
