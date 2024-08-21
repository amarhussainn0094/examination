<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssigntimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigntimes', function (Blueprint $table) {
            $table->id();
            $table->string('timetable_id')->nullable();
            $table->string('day_id')->nullable();
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
       
        Schema::dropIfExists('assigntimes');
    }

}
