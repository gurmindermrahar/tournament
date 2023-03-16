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
        Schema::create('teams', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('slug');
                $table->string('captain_name')->nullable();
                $table->string('created_by')->nullable();
                $table->string('logo')->nullable();
                $table->string('about')->nullable();
                $table->string('venue')->nullable();
                $table->string('group')->nullable();
                $table->string('date')->nullable();
                $table->string('wins')->nullable();
                $table->string('loses')->nullable();
                $table->string('total_games')->nullable();
                $table->string('player')->nullable();
                $table->string('status')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
