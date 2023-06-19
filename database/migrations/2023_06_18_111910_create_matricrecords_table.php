<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatricrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricrecords', function (Blueprint $table) {
            $table->id();
            $table->string('board_id');
            $table->integer('user_id');
            $table->bigInteger('matric_score_obtained');
            $table->bigInteger('matric_seat_no');
            $table->string('passing_year');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('matricrecords');
    }
}
