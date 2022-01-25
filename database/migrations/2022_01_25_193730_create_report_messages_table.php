<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_messages', function (Blueprint $table) {
            $table->integer('report_message_id')->primary();
            $table->integer('report_id')->nullable();
            $table->string('author', 30)->nullable();
            $table->text('message');
            $table->tinyInteger('msg_read')->nullable();
            $table->dateTime('date_read')->nullable();
            
            $table->foreign('report_id', 'fk_report_messages_report_id')->references('report_id')->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_messages');
    }
}
