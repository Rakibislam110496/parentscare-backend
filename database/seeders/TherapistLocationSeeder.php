<?php

namespace Database\Seeders;

use App\Models\TherapistLocation;
use Illuminate\Database\Seeder;

class TherapistLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TherapistLocation::create([
            "address" =>"Mirpur, Dhaka",
            "price"=>500,
            "share"=>10,
            "discount"=>10
        ]);
    }
}
