<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('year_id')->nullable();
            $table->string('section_id')->nullable();
            $table->string('fee')->nullable();
            $table->string('fee_date')->nullable();
            $table->string('admission_fee')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('rollnumber')->unique();
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
        Schema::dropIfExists('enrollments');
    }
}
