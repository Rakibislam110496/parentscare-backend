<?php

namespace Database\Seeders;

use App\Models\HomeSampleCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HomeSampleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSampleCategory::insert(array(
            array('id' => '1','name' => 'Category 1','slug' => 'category-1','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '2','name' => 'Category 2','slug' => 'category-2','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '3','name' => 'HEMATOLOGY','slug' => 'HEMATOLOGY','is_active' => '1','created_at' => '2022-01-26 19:01:30','updated_at' => '2022-01-26 19:01:30'),
            array('id' => '4','name' => 'THALASSEMIA','slug' => 'THALASSEMIA','is_active' => '1','created_at' => '2022-01-26 19:04:55','updated_at' => '2022-01-26 19:04:55'),
            array('id' => '5','name' => 'DIABETES','slug' => 'DIABETES','is_active' => '1','created_at' => '2022-01-26 19:05:40','updated_at' => '2022-01-26 19:05:40'),
            array('id' => '6','name' => 'KIDNEY DISEASE','slug' => 'KIDNEY-DISEASE','is_active' => '1','created_at' => '2022-01-26 19:06:07','updated_at' => '2022-01-26 19:06:07'),
            array('id' => '7','name' => 'HEART DISEASE','slug' => 'HEART-DISEASE','is_active' => '1','created_at' => '2022-01-26 19:07:10','updated_at' => '2022-01-26 19:07:10'),
            array('id' => '8','name' => 'ANEMIA PROFILE','slug' => 'ANEMIA-PROFILE','is_active' => '1','created_at' => '2022-01-26 19:19:10','updated_at' => '2022-01-26 19:19:10'),
            array('id' => '9','name' => 'SERUM ELECTROLYTES','slug' => 'SERUM-ELECTROLYTES','is_active' => '1','created_at' => '2022-01-26 19:20:35','updated_at' => '2022-01-26 19:20:35'),
            array('id' => '10','name' => 'LIVER DISEASE','slug' => 'LIVER-DISEASE','is_active' => '1','created_at' => '2022-01-26 19:21:20','updated_at' => '2022-01-26 19:21:20'),
            array('id' => '11','name' => 'THYROID DISORDERS','slug' => 'THYROID-DISORDERS','is_active' => '1','created_at' => '2022-01-26 19:21:46','updated_at' => '2022-01-26 19:21:46'),
            array('id' => '12','name' => 'REPRODUCTIVE TESTS','slug' => 'REPRODUCTIVE-TESTS','is_active' => '1','created_at' => '2022-01-26 19:22:10','updated_at' => '2022-01-26 19:22:10'),
            array('id' => '13','name' => 'CANCER MARKERS','slug' => 'CANCER-MARKERS','is_active' => '1','created_at' => '2022-01-26 19:22:35','updated_at' => '2022-01-26 19:22:35'),
            array('id' => '14','name' => 'ENDOCRINE & METABOLIC DISORDER','slug' => 'ENDOCRINE-and-METABOLIC-DISORDER','is_active' => '1','created_at' => '2022-01-26 19:26:37','updated_at' => '2022-01-26 19:26:37'),
            array('id' => '15','name' => 'NFECTIOUS DISEASES','slug' => 'NFECTIOUS-DISEASES','is_active' => '1','created_at' => '2022-01-26 19:27:03','updated_at' => '2022-01-26 19:27:03'),
            array('id' => '16','name' => 'INFECTIOUS DISEASE','slug' => 'INFECTIOUS-DISEASE','is_active' => '1','created_at' => '2022-01-26 20:58:23','updated_at' => '2022-01-26 20:58:23'),
            array('id' => '17','name' => 'ARTHRITIS DISEASE','slug' => 'ARTHRITIS-DISEASE','is_active' => '1','created_at' => '2022-01-26 20:59:27','updated_at' => '2022-01-26 20:59:27'),
            array('id' => '18','name' => 'RINE/STOOL SAMPLE','slug' => 'RINESTOOL-SAMPLE','is_active' => '1','created_at' => '2022-01-26 21:00:17','updated_at' => '2022-01-26 21:00:17'),
            array('id' => '20','name' => 'MICROBIOLOGY TESTS','slug' => 'MICROBIOLOGY-TESTS','is_active' => '1','created_at' => '2022-01-26 21:02:06','updated_at' => '2022-01-26 21:02:06'),
            array('id' => '21','name' => 'VITAMINS','slug' => 'VITAMINS','is_active' => '1','created_at' => '2022-01-26 21:02:50','updated_at' => '2022-01-26 21:02:50'),
            array('id' => '22','name' => 'OTHERS','slug' => 'OTHERS','is_active' => '1','created_at' => '2022-01-26 21:03:49','updated_at' => '2022-01-26 21:03:49'),
            array('id' => '23','name' => 'COAGULATION','slug' => 'COAGULATION','is_active' => '1','created_at' => '2022-01-26 21:07:49','updated_at' => '2022-01-26 21:07:49'),
            array('id' => '24','name' => 'DRUG MONITORING','slug' => 'DRUG-MONITORING','is_active' => '1','created_at' => '2022-01-26 21:08:31','updated_at' => '2022-01-26 21:08:31'),
            array('id' => '25','name' => 'PCR','slug' => 'PCR','is_active' => '1','created_at' => '2022-01-26 21:08:55','updated_at' => '2022-01-26 21:08:55'),
            array('id' => '26','name' => 'HISTOPATHOLOGY','slug' => 'HISTOPATHOLOGY','is_active' => '1','created_at' => '2022-01-26 21:09:32','updated_at' => '2022-01-26 21:09:32'),
            array('id' => '27','name' => 'CYTOGENETICS','slug' => 'CYTOGENETICS','is_active' => '1','created_at' => '2022-01-26 21:10:12','updated_at' => '2022-01-26 21:10:12'),
            array('id' => '28','name' => 'ALLERGY TESTS','slug' => 'ALLERGY-TESTS','is_active' => '1','created_at' => '2022-01-26 21:10:45','updated_at' => '2022-01-26 21:10:45'),
            array('id' => '29','name' => 'MOLECULAR DIAGNOSTICS','slug' => 'MOLECULAR-DIAGNOSTICS','is_active' => '1','created_at' => '2022-01-26 21:11:06','updated_at' => '2022-01-26 21:11:06'),
            array('id' => '30','name' => 'ADDITIONAL TEST','slug' => 'ADDITIONAL-TEST','is_active' => '1','created_at' => '2022-01-26 21:11:48','updated_at' => '2022-01-26 21:11:48'),
            array('id' => '31','name' => 'MMUNOHISTOCHEMISTRY','slug' => 'MMUNOHISTOCHEMISTRY','is_active' => '1','created_at' => '2022-01-26 21:12:34','updated_at' => '2022-01-26 21:12:34')
        ));
    }
}
