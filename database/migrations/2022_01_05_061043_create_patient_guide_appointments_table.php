<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientGuideAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_guide_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('patient_guide_id')->constrained();
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->integer('patient_age');
            $table->string('sickness_details');
            $table->integer('duration');
            $table->string('phone');
            $table->string('address');
            $table->dateTime('expected_date');
            $table->dateTime('appointment_date')->nullable();
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
        Schema::dropIfExists('patient_guide_appointments');
    }
}
