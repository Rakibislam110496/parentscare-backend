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

        DB::table('personal_access_tokens')->insert(
            [
                [
                    'tokenable_type' => 'App\Models\Admin',
                    'tokenable_id' => 1,
                    'name' => 'accessToken',
                    'token' => 'f83c6dfb6481bade801944d80ec878507bdfadbb3b604f8a4582fb5ee329853f',
                    'abilities' => '["*"]',
                    'created_at' => '2022-01-07 19:02:10',
                    'updated_at' => '2022-01-07 19:02:10',
                ],
                [
                    'tokenable_type' => 'App\Models\User',
                    'tokenable_id' => 1,
                    'name' => 'accessToken',
                    'token' => 'b3151834f1436ccb90eda18a528130389aa55207dfb32c04115ed1a2702116d2',
                    'abilities' => '["*"]',
                    'created_at' => '2022-01-07 19:04:20',
                    'updated_at' => '2022-01-07 19:04:20',
                ],
                [
                    'tokenable_type' => 'App\Models\User',
                    'tokenable_id' => 2,
                    'name' => 'accessToken',
                    'token' => '36f788745dd630972cc939708aa56d577cbbaab87e2a5df7af3439fc01f680b7',
                    'abilities' => '["*"]',
                    'created_at' => '2022-01-07 19:04:20',
                    'updated_at' => '2022-01-07 19:04:20',
                ],
            ]
        );
    }
}
