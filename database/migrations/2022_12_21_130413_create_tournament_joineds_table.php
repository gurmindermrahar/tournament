<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_joineds', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_id');
            $table->string('user_id');
            $table->string('team_id');
            $table->string('agree_rules')->nullable();
            $table->string('deviceos')->nullable();
            $table->string('devicetype')->nullable();
            $table->string('checkedIn')->nullable();
            $table->string('points')->nullable();
            $table->string('participantName')->nullable();
            $table->string('waitlisted')->nullable();
            $table->string('seed')->nullable();
            $table->string('locked')->nullable();
            $table->text('meta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament_joineds');
    }
};
