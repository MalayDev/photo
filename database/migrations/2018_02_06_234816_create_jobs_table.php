<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ph_id');
            $table->integer('user_id');
            $table->string('description');
            $table->double('price', 8, 2);
            $table->string('location');
            $table->string('duration');
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('comment')->nullable();
            $table->integer('rating')->nullable();
            $table->timestamps();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
