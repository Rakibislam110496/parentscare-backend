<?php

namespace Database\Seeders;

use App\Models\ForeignMedicalLocation;
use Illuminate\Database\Seeder;

class ForeignMedicalLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ForeignMedicalLocation::create([
            "country"=>"USA"
        ]);
    }
}
