<?php

namespace Database\Seeders;

use App\Models\CareGiver;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CareGiverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CareGiver::create([
            "name" => "Care Giver",
            "email" => "caregiver@test.com",
            "password" => Hash::make("password"),
            "phone" => "015842151425",
            "gender" => "female",
            "dob" => "2021-12-25",
            "address" => "Mirpur, Dhaka",
            "bio" => "Hi, I am your care giver.",
            "photo" => "http://127.0.0.1:8000/uploads/DIueErcydC.1640077158.jpg"
        ]);
    }
}
