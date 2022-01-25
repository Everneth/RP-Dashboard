<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevopMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devop_material', function (Blueprint $table) {
            $table->integer('material_id')->primary();
            $table->integer('project_id');
            $table->string('material', 30);
            $table->integer('total');
            $table->integer('collected');
            $table->tinyInteger('complete');
            $table->tinyInteger('focused');
            
            $table->foreign('project_id', 'devop_material_requirements_devop_projects_project_id_fk')->references('project_id')->on('devop_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devop_material');
    }
}
