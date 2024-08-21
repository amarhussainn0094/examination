<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentaccounts', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('enrollment_id')->nullable();
            $table->string('fee_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('fee_date')->nullable();
            $table->string('paymethod')->nullable();
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
        Schema::dropIfExists('studentaccounts');
    }
}
