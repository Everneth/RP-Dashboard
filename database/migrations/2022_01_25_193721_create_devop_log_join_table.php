<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevopLogJoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devop_log_join', function (Blueprint $table) {
            $table->integer('log_id')->primary();
            $table->integer('player_id');
            $table->integer('project_id');
            $table->dateTime('join_date');
            
            $table->foreign('project_id', 'devop_project_join_log_devop_projects_project_id_fk')->references('project_id')->on('devop_project');
            $table->foreign('player_id', 'devop_project_join_log_players_player_id_fk')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devop_log_join');
    }
}
