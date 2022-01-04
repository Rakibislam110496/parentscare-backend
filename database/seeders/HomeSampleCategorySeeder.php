<?php

namespace Database\Seeders;

use App\Models\HomeSampleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HomeSampleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSampleCategory::create([
            "name"=>"Category 1",
            "slug"=>Str::slug("Category 1")
        ]);
        HomeSampleCategory::create([
            "name"=>"Category 2",
            "slug"=>Str::slug("Category 2")
        ]);
    }
}
