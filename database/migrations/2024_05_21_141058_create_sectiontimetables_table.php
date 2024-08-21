<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectiontimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectiontimetables', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('section_id')->nullable();
            $table->UnsignedBigInteger('subject_id')->nullable();
            $table->UnsignedBigInteger('year_id')->nullable();
            $table->UnsignedBigInteger('teacher_id')->nullable();
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
        Schema::dropIfExists('sectiontimetables');
    }
}
