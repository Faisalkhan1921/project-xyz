<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHscrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hscrecords', function (Blueprint $table) {
            $table->id();
            $table->string('board_id');
            $table->integer('user_id');
            $table->bigInteger('hsc_score_obtained');
            $table->bigInteger('hsc_seat_no');
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
        Schema::dropIfExists('hscrecords');
    }
}
