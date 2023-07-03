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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('keyword');
            $table->text('meta_description');
            $table->text('about');
            $table->string('location');
            $table->string('telp');
            $table->string('email_web');
            $table->string('fb');
            $table->string('twitter');
            $table->string('ig');
            $table->string('logo');
            $table->integer('visit');
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
        Schema::dropIfExists('settings');
    }
};
