<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nrc');
            $table->date('dob');
            $table->text('image');
            $table->string('codenumber');
            $table->string('phonenumber');
            $table->text('address');
            $table->text('degree');
            $table->string('email')->unique();
            $table->integer('team_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->text('experience');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('staff');
    }
}
