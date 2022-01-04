<?php

namespace Database\Seeders;

use App\Models\PatientGuide;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientGuide::create([
            "name" => "Patient Guide",
            "email" => "patientguide@test.com",
            "password" => Hash::make("password"),
            "phone" => "01245865945",
            "dob" => "2021-11-21",
            "gender" => "female",
            "location" => "South central road, khulna",
            "bio" => "I am good at guiding my patients, hire me now...",
            "photo" => "http://127.0.0.1:8000/uploads/9xgdAqnzGb.1639811646.jpg",
            "price" => 999,
            "share" => 10,
            "discount" => 10
        ]);
    }
}
