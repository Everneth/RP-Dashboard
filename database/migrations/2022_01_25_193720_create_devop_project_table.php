<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevopProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devop_project', function (Blueprint $table) {
            $table->integer('project_id')->primary();
            $table->integer('leader');
            $table->string('name', 30);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->tinyInteger('complete');
            $table->tinyInteger('focused');
            $table->string('description', 250)->nullable();
            
            $table->foreign('leader', 'devop_projects_players_player_id_fk')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devop_project');
    }
}
