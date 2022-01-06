<?php

namespace Database\Seeders;

use App\Models\HomeSampleSubcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HomeSampleSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSampleSubcategory::create([
            "home_sample_category_id" => 1,
            "name" => "Subcategory 1",
            "slug"=>Str::slug("Subcategory 1"),
            "price" => 100,
            "share" => 10,
            "discount" => 10
        ]);

        HomeSampleSubcategory::create([
            "home_sample_category_id" => 1,
            "name" => "Subcategory 2",
            "slug"=>Str::slug("Subcategory 2"),
            "price" => 100,
            "share" => 10,
            "discount" => 10
        ]);

        HomeSampleSubcategory::create([
            "home_sample_category_id" => 2,
            "name" => "Subcategory 3",
            "slug"=>Str::slug("Subcategory 3"),
            "price" => 100,
            "share" => 10,
            "discount" => 10
        ]);
    }
}
