<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_members', function (Blueprint $table) {
            $table->integer('guild_member_id')->primary();
            $table->integer('guild_id');
            $table->integer('player_id');
            $table->integer('guild_rank');
            
            $table->foreign('guild_id', 'fk_guild_id_guilds')->references('guild_id')->on('guilds');
            $table->foreign('player_id', 'fk_player_id_players')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guild_members');
    }
}
