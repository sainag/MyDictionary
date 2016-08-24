<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('words', function (Blueprint $table) {
          $table->increments('wordid');
          $table->string('word')->unique();
          $table->string('slug')->unique();
          $table->string('meaning');
          $table->string('language');
          $table->string('note');
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
        Schema::drop('words');
    }
}
