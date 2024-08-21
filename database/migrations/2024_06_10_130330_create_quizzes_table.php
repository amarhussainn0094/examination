<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('due_date')->nullable();
            $table->string('description')->nullable();
            $table->string('class_id')->nullable();
            $table->string('section_id')->nullable();
            $table->string('no_of_questions')->nullable();
            $table->string('subjective_questions')->nullable();
            $table->string('objective_questions')->nullable();
            $table->string('total_marks')->nullable();
            $table->string('pass_marks_percentage')->nullable();
            $table->string('status')->nullable();
            $table->string('subject_id')->nullable();
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
        Schema::dropIfExists('quizzes');
    }
}
