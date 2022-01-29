<?php

namespace Database\Seeders;

use App\Models\DoctorDepartment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
//            UserSeeder::class,
            CareGiverSeeder::class,
            CareGiverServiceSeeder::class,
            DoctorDepartmentSeeder::class,
            DoctorSeeder::class,
            ForeignMedicalLocationSeeder::class,
            HomeSampleCategorySeeder::class,
            HomeSampleSubcategorySeeder::class,
            NurseSeeder::class,
            PatientGuideSeeder::class,
            TherapistLocationSeeder::class,
            TherapistSeeder::class,
            NursePackageSeeder::class,
            GlobalPackageSeeder::class,
        ]);
    }
}
