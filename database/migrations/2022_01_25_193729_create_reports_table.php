<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->integer('report_id')->primary();
            $table->integer('initiator_id')->index('fk_reports_players_idx');
            $table->bigInteger('channel_id')->nullable();
            $table->boolean('active')->default(1);
            $table->dateTime('date_opened')->nullable();
            $table->dateTime('date_closed')->nullable();
            $table->bigInteger('embed_message_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
