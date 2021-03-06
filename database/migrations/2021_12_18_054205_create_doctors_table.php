<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_department_id')->constrained();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('speciality');
            $table->dateTime('dob');
            $table->string('gender');
            $table->string('degree');
            $table->text('bio');
            $table->string('photo');
            $table->double('price');
            $table->integer('discount');
            $table->integer('share');
            $table->string('availabilities');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_senior')->default(false);
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
        Schema::dropIfExists('doctors');
    }
}
