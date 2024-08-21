<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuassignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuassignments', function (Blueprint $table) {
            $table->id();
            $table->string('class_id')->nullable();
            $table->string('section_id')->nullable();
            $table->string('assignment_id')->nullable();
            $table->string('subject_id')->nullable();
            $table->string('enrollment_id')->nullable();
            $table->string('upload')->nullable();
            $table->string('marks')->nullable();
            $table->string('due_date')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('stuassignments');
    }
}
