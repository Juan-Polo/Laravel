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
        Schema::create('notification_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')
             ->references('id')
             ->on('users');

             $table->unsignedBigInteger('notification_id');
             $table->foreign('notification_id')
             ->references('id')
             ->on('notifications');
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
        Schema::dropIfExists('notification_user');
    }
};
