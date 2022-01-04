<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSampleAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_sample_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('home_sample_subcategories_id')->constrained();
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->integer('patient_age');
            $table->string('test_details');
            $table->string('phone');
            $table->string('address');
            $table->date('expected_date');
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
        Schema::dropIfExists('home_sample_appointments');
    }
}
