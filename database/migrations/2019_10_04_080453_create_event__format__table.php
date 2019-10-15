<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventFormatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_format', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('format_id');
            $table->unsignedBigInteger('event_id');
            $table->foreign('format_id')->references('id')->on('formats')->ondelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_format');
    }
}
