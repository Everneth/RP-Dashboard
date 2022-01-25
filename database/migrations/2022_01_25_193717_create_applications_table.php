<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('app_id');
            $table->bigInteger('applicant_discord_id')->nullable();
            $table->string('mc_ign', 16)->nullable();
            $table->integer('age')->nullable();
            $table->string('location', 60)->nullable();
            $table->string('friend');
            $table->string('has_been_banned');
            $table->mediumText('looking_for');
            $table->mediumText('love_hate');
            $table->mediumText('intro');
            $table->string('secret_word', 20)->nullable();
            $table->smallInteger('is_approved')->default(0);
            $table->string('mc_uuid', 50)->nullable();
            $table->smallInteger('app_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
