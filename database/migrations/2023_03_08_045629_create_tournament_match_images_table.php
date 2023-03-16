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
        Schema::create('tournament_match_images', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_match_id');
            $table->string('tournament_id');
            $table->string('team_id');
            $table->string('image');
            $table->string('upload_by');
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
        Schema::dropIfExists('tournament_match_images');
    }
};
