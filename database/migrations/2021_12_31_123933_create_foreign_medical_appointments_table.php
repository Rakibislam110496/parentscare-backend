<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignMedicalAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_medical_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('foreign_medical_location_id')->constrained();
            $table->string('patient_name');
            $table->string('patient_phone');
            $table->boolean('patient_have_visa');
            $table->boolean('patient_need_visa_processing');
            $table->boolean('patient_need_doctor_appointment');
            $table->boolean('patient_need_pre_counselling');
            $table->boolean('patient_need_ticket_booking');
            $table->boolean('patient_need_accommodation');
            $table->boolean('patient_need_local_transportation');
            $table->boolean('patient_need_hospital_admission');
            $table->boolean('patient_need_air_ambulance');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('foreign_medical_appointments');
    }
}
