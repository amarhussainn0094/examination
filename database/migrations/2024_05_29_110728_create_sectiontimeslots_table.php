<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectiontimeslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectiontimeslots', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('sectiontimetable_id')->nullable();
            $table->UnsignedBigInteger('timetable_id')->nullable();
            $table->UnsignedBigInteger('timeslot_id')->nullable();
            $table->UnsignedBigInteger('day_id')->nullable();
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
        Schema::dropIfExists('sectiontimeslots');
    }
}
