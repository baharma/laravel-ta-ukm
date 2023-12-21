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
        Schema::create('member_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->references('id')->on('ukms');
            $table->string('absen');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('role')->nullable();
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
        Schema::dropIfExists('member_events');
    }
};
