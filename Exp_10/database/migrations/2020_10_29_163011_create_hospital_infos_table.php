<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_infos', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->bigInteger('phone');
            $table->string('landline');
            $table->string('hospital_id');
            $table->string('con_person');
            $table->string('password');
            $table->string('email')->unique();
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('c_o');
            $table->integer('c_r');
            $table->integer('n_o');
            $table->integer('n_r');
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
        Schema::dropIfExists('hospital_infos');
    }
}
