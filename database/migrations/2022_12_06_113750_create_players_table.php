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
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('team_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('slug');
            $table->string('bio');
            $table->string('country');
            $table->string('age');
            $table->string('total_games');
            $table->string('wins');
            $table->string('loses');
            $table->string('image')->nullable();
            $table->string('beCaptain')->nullable();
            $table->string('countryFlag')->nullable();
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('twitch_url');
            $table->string('youtube_url');
            $table->string('gears');
            $table->rememberToken();
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
        Schema::dropIfExists('players');
    }
};
