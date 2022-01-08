<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSampleSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_sample_subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_sample_category_id')->constrained();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('price');
            $table->integer('discount');
            $table->integer('share');
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
        Schema::dropIfExists('home_sample_subcategories');
    }
}
