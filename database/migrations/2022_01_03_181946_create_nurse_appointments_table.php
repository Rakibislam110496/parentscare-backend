<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('nurse_id')->constrained();
            $table->foreignId('nurse_package_id')->nullable()->constrained();
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->integer('patient_age');
            $table->string('sickness_details');
            $table->dateTimeTz('expected_date');
            $table->integer('duration');
            $table->dateTimeTz('appointment_date')->nullable();
            $table->string('phone');
            $table->string('address');
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
        Schema::dropIfExists('nurse_appointments');
    }
}
