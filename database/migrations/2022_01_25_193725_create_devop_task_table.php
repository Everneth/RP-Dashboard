<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevopTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devop_task', function (Blueprint $table) {
            $table->integer('task_id')->primary();
            $table->integer('project_id');
            $table->string('task');
            $table->tinyInteger('complete');
            $table->tinyInteger('focused');
            
            $table->foreign('project_id', 'devop_task_devop_project_project_id_fk')->references('project_id')->on('devop_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devop_task');
    }
}
