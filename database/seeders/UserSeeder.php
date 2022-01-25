<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
                [
                    'name' => "User 1",
                    'email' => 'user1@test.com',
                    'password' => Hash::make("password"),
                    'phone' => "01834342343",
                    "address" => "3/2 south central road, khulna"
                ],
                [
                    'name' => "User 2",
                    'email' => 'user2@test.com',
                    'password' => Hash::make("password"),
                    'phone' => "01834344553",
                    "address" => "3/2 south central road, khulna"
                ]
            ]
        );
    }
}
