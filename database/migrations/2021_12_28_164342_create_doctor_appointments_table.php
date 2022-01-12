<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->integer('patient_age');
            $table->text('sickness_details');
            $table->string('phone');
            $table->string('address');
            $table->dateTime('expected_date_time');
            $table->dateTime('appointment_date_time')->nullable();
            $table->string('status')->default('pending');
            $table->double('price');
            $table->integer('share');
            $table->integer('discount');
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
        Schema::dropIfExists('doctor_appointments');
    }
}
