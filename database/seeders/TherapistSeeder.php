<?php

namespace Database\Seeders;

use App\Models\Therapist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TherapistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Therapist::create([
            "therapist_location_id" => 1,
            "name" => "Therapist",
            "email" => "therapist@test.com",
            "password" => Hash::make("password"),
            "phone" => "02342343213",
            "dob" => "2021-12-11",
            "gender" => "male",
            "bio" => "Mobile beshi tepa jabe na, this is bad for health...",
            "photo" => "http://127.0.0.1:8000/uploads/iqlQz6Q0Cx.1639926846.jpg",
            "availabilities" => "saturday,sunday,monday,tuesday"
        ]);
    }
}
