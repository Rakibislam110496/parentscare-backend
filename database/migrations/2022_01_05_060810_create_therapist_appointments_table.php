<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('therapist_id')->constrained();
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->integer('patient_age');
            $table->string('sickness_details');
            $table->integer('duration');
            $table->string('phone');
            $table->string('address');
            $table->date('expected_date');
            $table->date('appointment_date')->nullable();
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
        Schema::dropIfExists('therapist_appointments');
    }
}
