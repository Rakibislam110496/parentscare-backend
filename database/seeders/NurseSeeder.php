<?php

namespace Database\Seeders;

use App\Models\Nurse;
use Illuminate\Database\Seeder;

class NurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nurse::insert([
            "name" => "Test Nurse",
            "email" => "testnurse@test.com",
            "password" => "password",
            "phone" => "01245865945",
            "designation" => "something",
            "dob" => "2021-11-21",
            "gender" => "female",
            "location" => "South central road, khulna",
            "is_special" => true,
            "bio" => "There's no bio availablel right now...Stalk on.......",
            "photo" => "http://127.0.0.1:8000/uploads/9xgdAqnzGb.1639811646.jpg",
            "price" => 999,
            "share" => 10,
            "discount" => 10
        ]);
    }
}
