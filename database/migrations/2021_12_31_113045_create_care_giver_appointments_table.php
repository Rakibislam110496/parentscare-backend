<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareGiverAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_giver_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('care_giver_id')->nullable()->constrained();
            $table->foreignId('care_giver_service_id')->constrained();
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->integer('patient_age');
            $table->string('sickness_details');
            $table->string('patient_phone');
            $table->string('patient_address');
            $table->string('care_giver_type');
            $table->date('expected_date_from');
            $table->date('expected_date_to');
            $table->date('appointment_date_from')->nullable();
            $table->date('appointment_date_to')->nullable();
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
        Schema::dropIfExists('care_giver_appointments');
    }
}
