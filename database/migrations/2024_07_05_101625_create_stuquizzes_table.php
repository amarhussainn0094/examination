<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuquizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuquizzes', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_id')->nullable();
            $table->string('section_id')->nullable();
            $table->string('class_id')->nullable();
            $table->string('subject_id')->nullable();
            $table->string('enrollment_id')->nullable();
            $table->string('marks')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('stuquizzes');
    }
}
