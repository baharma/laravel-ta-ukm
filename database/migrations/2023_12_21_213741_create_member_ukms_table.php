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
        Schema::create('member_ukms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ukm_id')->references('id')->on('ukms');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('member_status')->nullable();
            $table->foreignId('sertif')->references('id')->on('sertifs');
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
        Schema::dropIfExists('member_ukms');
    }
};
