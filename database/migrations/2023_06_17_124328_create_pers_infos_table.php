<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pers_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('sname');
            $table->string('s_surname');
            $table->string('s_cnic');
            $table->string('s_fname');
            $table->string('s_mname');
            $table->string('s_kname');
            $table->string('s_gname');
            $table->string('s_gnic');
            $table->string('s_fphone');
            $table->string('s_phone');
            $table->string('s_dob');
            $table->string('s_kphone');
            $table->string('dist_id');
            $table->string('s_religion');
            $table->string('s_address');
            $table->string('s_prc');
            $table->string('s_gender');
            $table->string('s_hafiz');
            $table->string('sports_id');
            $table->string('s_phy');
            $table->string('sportsachieved');
            $table->string('sportslevel');
            $table->string('alreadyadmitted');
            $table->string('blood_id');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('pers_infos');
    }
}
