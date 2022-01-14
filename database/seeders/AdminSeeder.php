<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
                [
                    'type' => 'super',
                    'name' => "Admin",
                    'email' => 'admin@test.com',
                    'password' => Hash::make("password")
                ],
                [
                    'type' => 'sub',
                    'name' => "Sub Admin",
                    'email' => 'subadmin@test.com',
                    'password' => Hash::make("password")
                ]
            ]
        );
    }
}
