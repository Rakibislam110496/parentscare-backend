<?php

namespace Database\Seeders;

use App\Models\NursePackage;
use Illuminate\Database\Seeder;

class NursePackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NursePackage::create([
            "name" => "Package 1",
            "is_special" => false,
            "duration" => 7,
            "price" => 200,
            "share" => 10,
            "discount" => 20
        ]);

        NursePackage::create([
            "name" => "Package 2",
            "is_special" => true,
            "duration" => 7,
            "price" => 1500,
            "share" => 10,
            "discount" => 20
        ]);
    }
}
