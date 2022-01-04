<?php

namespace Database\Seeders;

use App\Models\DoctorDepartment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorDepartment::create([
            'name' => 'Cardiology',
            'slug' => Str::slug("Cardiology")
        ]);
        DoctorDepartment::create([
            'name' => 'Neurology',
            'slug' => Str::slug("Neurology")
        ]);
    }
}
