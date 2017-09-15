<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_details', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->integer('tweet_polarity_id')->unsigned();
        $table->foreign('tweet_polarity_id')->references('id')->on('tweet_polarity');
        $table->integer('tweet_emotions_id')->unsigned();
        $table->foreign('tweet_emotions_id')->references('id')->on('tweet_emotions');
        $table->string('tweets');
        $table->string('screen_name');
        $table->string('retweet');
        $table->string('location');
        $table->integer('favorites');
        $table->timestamp('date_of_tweets');
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
        Schema::dropIfExists('tweet_details');
    }
}
