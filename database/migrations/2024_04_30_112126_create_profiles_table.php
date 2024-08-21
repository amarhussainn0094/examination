<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("father_name")->nullable();
            $table->string("email")->unique();
            $table->string("image")->nullable();
            $table->string("gender")->nullable();
            $table->string("cnic")->nullable();   
            $table->string("alternative_contact")->nullable();
            $table->string("dob")->nullable();
            $table->string("religious")->nullable();
            $table->string("state")->nullable();
            $table->string("city")->nullable();
            $table->string("address")->nullable();
            $table->string("degree")->nullable();
            $table->string("institute")->nullable();
            $table->string("year")->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
