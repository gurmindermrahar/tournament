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
        Schema::table('users', function (Blueprint $table) {
            $table->string('admin_theme_mode')->after('remember_token')->default('dark')->comment('dark, light');
            $table->string('rank')->before('created_at')->nullable();
            $table->string('total_earning')->before('created_at')->nullable();
            $table->string('image')->before('created_at')->nullable();
            $table->string('wallet_coins')->before('created_at')->default(0);
            $table->string('username')->before('created_at')->unique()->nullable();
            $table->string('timezone')->before('created_at')->nullable();
            $table->string('mailing_preferences')->before('created_at')->default(0);
            $table->string('notification_sounds')->before('created_at')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
