<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table){
            $table->string('name');
            $table->date('starttime');
            $table->dateTime('last_signup_time');
            $table->integer('min_price_member');
            $table->integer('max_price_member');
            $table->integer('min_price_others');
            $table->integer('max_price_others');
            $table->integer('places');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('games');
	}

}
