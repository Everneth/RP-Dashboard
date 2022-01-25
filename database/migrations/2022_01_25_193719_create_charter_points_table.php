<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharterPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charter_points', function (Blueprint $table) {
            $table->bigInteger('charter_point_id')->primary();
            $table->integer('issued_to');
            $table->text('reason');
            $table->integer('amount');
            $table->integer('issued_by');
            $table->dateTime('date_issued')->nullable();
            $table->dateTime('date_expired')->nullable();
            $table->boolean('expunged')->default(0);
            
            $table->foreign('issued_by', 'fk_charterissuer_players')->references('player_id')->on('players');
            $table->foreign('issued_to', 'fk_charterrecipient_players')->references('player_id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charter_points');
    }
}
