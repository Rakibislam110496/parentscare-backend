<?php

namespace Database\Seeders;

use App\Models\CareGiverService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CareGiverServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CareGiverService::create([
            "name" => "Service 1",
            "slug" => Str::slug("Service 1"),
            "price" => 2000,
            "discount" => 10,
            "share" => 10
        ]);
    }
}
