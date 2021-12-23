<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            "password" => "password",
            "phone" => "01834234323",
            "speciality" => "something",
            "dob" => "2021-11-21",
            "gender" => "male",
            "degree" => "MBBS",
            "bio" => "Hi, I am GPA5, got admitted in 2015. You know the rest...",
            "photo" => "http://127.0.0.1:8000/uploads/9xgdAqnzGb.1639811646.jpg",
            "price" => 999,
            "share" => 10,
            "discount" => 10
        ]);
    }
}
