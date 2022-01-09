<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('therapist_location_id')->constrained();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->string('gender');
            $table->dateTimeTz('dob');
            $table->text('bio');
            $table->string('photo');
            $table->string('availabilities');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('therapists');
    }
}
