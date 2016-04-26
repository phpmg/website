<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function ($table) {
            $table->increments('id');
            $table->string('meetup_id');
            $table->string('name');
            $table->float('lat');
            $table->float('long');
            $table->string('address', 400);
            $table->string('city', 400);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('events', function ($table) {
            $table->increments('id');
            $table->string('meetup_id');
            $table->string('name', 200);
            $table->integer('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->dateTime('start_at');
            $table->text('description');
            $table->string('meetup_url', 300);
            $table->softDeletes();
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::dropIfExists('venues');
        Schema::dropIfExists('events');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
