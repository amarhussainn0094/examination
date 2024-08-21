<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('father_name');
            $table->string('cnic');
            $table->string('whatsapp');
            $table->string('description');
            $table->string('address');
            $table->string('user_id')->nullable();
            $table->string('picture');
            $table->string('dob');
            $table->string('contract');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * 
     * 

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
