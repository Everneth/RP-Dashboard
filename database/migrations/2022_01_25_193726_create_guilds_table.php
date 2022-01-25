<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->integer('guild_id')->primary();
            $table->string('guild_name', 24)->nullable();
            $table->integer('guild_leader_id')->nullable();
            $table->integer('guild_score')->nullable();
            $table->string('guild_primary_color', 9)->nullable();
            $table->string('guild_secondary_color', 9)->nullable();
            $table->string('guild_banner_path', 26)->nullable();
            $table->boolean('guild_is_rp')->default(1);
            $table->dateTime('guild_created_date')->nullable();
            $table->integer('guild_tier')->nullable();
            $table->string('guild_friendly_name', 24)->nullable();
            $table->string('guild_prefix', 6)->nullable();
            
            $table->foreign('guild_leader_id', 'fk_guild_leader_member_id')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds');
    }
}
