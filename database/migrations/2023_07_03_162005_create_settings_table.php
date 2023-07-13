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
            $table->text('location');
            $table->string('telp');
            $table->string('email_web');
            $table->string('fb');
            $table->string('twitter');
            $table->string('ig');
            $table->string('logo')->nullable();
            $table->integer('visit')->default(0);
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
