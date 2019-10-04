<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $type->integer('type');
            $table->string('language');
            $table->string('certificate');
            $table->string('genre');
            $table->date('release_date');
            $table->integer('status');
            $table->string('duration');
            $table->string('event_pic');
            $table->longText('description');
            $table->longText('trailer');
            // $table->
            // $table->
            // $table->
            // $table->
            
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
        Schema::dropIfExists('events');
    }
}
