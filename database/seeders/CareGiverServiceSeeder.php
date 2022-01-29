<?php

namespace Database\Seeders;

use App\Models\CareGiverService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CareGiverServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CareGiverService::insert(array(
            array('id' => '1','name' => 'Service 1','slug' => 'service-1','price' => '2000','discount' => '10','share' => '10','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '2','name' => 'Patients Attendants','slug' => 'Patients-Attendants','price' => '1200','discount' => '5','share' => '25','is_active' => '1','created_at' => '2022-01-27 11:48:35','updated_at' => '2022-01-27 11:48:35')
        ));
    }
}
