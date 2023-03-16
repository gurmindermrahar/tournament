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
        Schema::create('tournament_matches', function (Blueprint $table) {
            $table->id();
            $table->string('team_a');
            $table->string('team_b');
            $table->string('Ateam_name')->nullable();
            $table->string('Bteam_name')->nullable();
            $table->string('Ateam_ready')->default(0);
            $table->string('Bteam_ready')->default(0);
            $table->string('tournament_id');
            $table->string('won_team');
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
        Schema::dropIfExists('tournament_matches');
    }
};
