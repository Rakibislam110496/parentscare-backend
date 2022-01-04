<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::insert([
            "doctor_department_id" => 1,
            "name" => "Doctor",
            "email" => "doctor@test.com",
            "password" => Hash::make("password"),
            "phone" => "01834234323",
            "speciality" => "something",
            "dob" => "2021-11-21",
            "gender" => "male",
            "degree" => "MBBS",
            "bio" => "Hi, I am GPA5, got admitted in 2015. You know the rest...",
            "photo" => "http://127.0.0.1:8000/uploads/7Q3E165AH3.1639900486.jpg",
            "price" => 999,
            "share" => 10,
            "discount" => 10,
            "availabilities" => "saturday,sunday,monday,tuesday"
        ]);
    }
}
