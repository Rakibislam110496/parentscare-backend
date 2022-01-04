<?php

namespace Database\Seeders;

use App\Models\GlobalPackage;
use Illuminate\Database\Seeder;

class GlobalPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GlobalPackage::create([
            "name" => "Gloabal package 1",
            "amount" => 200,
            "validity" => 7,
            "discount" => 10,
            "share" => 10,
            "description" => "Hello customers, enjoy our Global package 1 with a discount of 10%"
        ]);

        GlobalPackage::create([
            "name" => "Gloabal package 2",
            "amount" => 1000,
            "validity" => 7,
            "discount" => 10,
            "share" => 10,
            "description" => "Hello customers, enjoy our Global package 1 with a discount of 10%"
        ]);
    }
}
