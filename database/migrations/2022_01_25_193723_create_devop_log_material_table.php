<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevopLogMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devop_log_material', function (Blueprint $table) {
            $table->integer('log_id')->primary();
            $table->integer('project_id');
            $table->integer('material_id');
            $table->integer('logged_by');
            $table->integer('validated_by')->nullable();
            $table->tinyInteger('validated');
            $table->integer('material_collected');
            $table->integer('time_worked');
            $table->dateTime('log_date');
            $table->string('description', 250)->nullable();
            
            $table->foreign('material_id', 'devop_log_material_devop_material_material_id_fk')->references('material_id')->on('devop_material');
            $table->foreign('project_id', 'devop_materials_log_devop_projects_project_id_fk')->references('project_id')->on('devop_project');
            $table->foreign('logged_by', 'devop_materials_log_players_player_id_fk')->references('player_id')->on('players');
            $table->foreign('validated_by', 'devop_materials_log_players_player_id_fk_2')->references('player_id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devop_log_material');
    }
}
