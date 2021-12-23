<?php

namespace Database\Seeders;

use App\Models\DoctorDepartment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorDepartment::insert(
            [
                'name' => 'Cardiology',
                'slug' => 'cardiology'
            ]
        );
    }
}
