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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('game');
            $table->string('game_mode');
            $table->time('start_time');
            $table->string('header_banner')->nullable();
            $table->text('about')->nullable();
            $table->text('contact_with')->nullable();
            $table->text('contact_link')->nullable();
            $table->text('contact_details')->nullable();
            $table->text('critical_rules')->nullable();
            $table->text('rules')->nullable();
            $table->text('prizes')->nullable();
            $table->text('schedule')->nullable();
            $table->string('max_teams')->nullable();
            $table->string('play_per_team')->nullable();
            $table->string('max_players')->nullable();
            $table->string('credit_entry')->nullable();
            $table->string('platform')->nullable();
            $table->string('type')->nullable();
            $table->string('cash_prize')->default(0);
            $table->string('region')->default('NA');
            $table->string('pixel_esports_profil')->nullable();
            $table->string('language')->nullable();
            $table->text('tournament_clone_from')->nullable();
            $table->boolean('published')->default(0);
            $table->boolean('check_in')->default(0);
            $table->boolean('require_screenshots')->default(0);
            $table->boolean('participant_points')->default(0);
            $table->boolean('registration_participant_limit')->default(0);
            $table->boolean('country_flags_on_brackets')->default(0);
            $table->boolean('registration_regions')->default(0);
            $table->string('participant_limit')->nullable();
            $table->string('regions_allowed')->nullable();
            $table->string('game_map')->nullable();
            $table->enum('match_score_reporting',['Admin','Both'])->comment('Admin for Only admin,Both for admin and player')->default(0);
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
        Schema::dropIfExists('tournaments');
    }
};
