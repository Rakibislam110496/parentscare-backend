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
        DoctorDepartment::insert(array(
            array('id' => '1','name' => 'Cardiology','slug' => 'cardiology','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '2','name' => 'Neurology','slug' => 'neurology','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '3','name' => 'Gyne and Obs','slug' => 'Gyne-and-Obs','is_active' => '1','created_at' => '2022-01-24 14:33:20','updated_at' => '2022-01-24 14:33:20'),
            array('id' => '4','name' => 'Nephrology','slug' => 'Nephrology','is_active' => '1','created_at' => '2022-01-24 14:33:35','updated_at' => '2022-01-24 14:33:35'),
            array('id' => '5','name' => 'Internal Medicine','slug' => 'Internal-Medicine','is_active' => '1','created_at' => '2022-01-24 14:33:57','updated_at' => '2022-01-24 14:33:57'),
            array('id' => '6','name' => 'Dental','slug' => 'Dental','is_active' => '1','created_at' => '2022-01-24 14:34:13','updated_at' => '2022-01-24 14:34:13'),
            array('id' => '7','name' => 'Medicine and Nephrology Department','slug' => 'Medicine-and-Nephrology-Department','is_active' => '1','created_at' => '2022-01-24 14:51:52','updated_at' => '2022-01-24 14:51:52'),
            array('id' => '8','name' => 'Neurology, Nephrology and Medicine','slug' => 'Neurology-Nephrology-and-Medicine','is_active' => '1','created_at' => '2022-01-24 14:52:50','updated_at' => '2022-01-24 14:52:50'),
            array('id' => '9','name' => 'Paediatric','slug' => 'Paediatric','is_active' => '1','created_at' => '2022-01-24 14:53:26','updated_at' => '2022-01-24 14:53:26'),
            array('id' => '10','name' => 'Gynecology','slug' => 'Gynecology','is_active' => '1','created_at' => '2022-01-24 14:53:46','updated_at' => '2022-01-24 14:53:46'),
            array('id' => '11','name' => 'Ophthalmology','slug' => 'Ophthalmology','is_active' => '1','created_at' => '2022-01-24 14:54:08','updated_at' => '2022-01-24 14:54:08'),
            array('id' => '12','name' => 'Surgery','slug' => 'Surgery','is_active' => '1','created_at' => '2022-01-24 14:54:26','updated_at' => '2022-01-24 14:54:26'),
            array('id' => '13','name' => 'Dermatology','slug' => 'Dermatology','is_active' => '1','created_at' => '2022-01-24 14:54:51','updated_at' => '2022-01-24 14:54:51'),
            array('id' => '14','name' => 'Medicine and Nephrology','slug' => 'Medicine-and-Nephrology','is_active' => '1','created_at' => '2022-01-24 14:55:23','updated_at' => '2022-01-24 14:55:23'),
            array('id' => '15','name' => 'Department of ENT','slug' => 'Department-of-ENT','is_active' => '1','created_at' => '2022-01-24 14:56:30','updated_at' => '2022-01-24 14:56:30'),
            array('id' => '16','name' => 'orthopaedics','slug' => 'orthopaedics','is_active' => '1','created_at' => '2022-01-24 14:56:49','updated_at' => '2022-01-24 14:56:49'),
            array('id' => '17','name' => 'Endocrinology and metabolism','slug' => 'Endocrinology-and-metabolism','is_active' => '1','created_at' => '2022-01-24 14:58:09','updated_at' => '2022-01-24 14:58:09'),
            array('id' => '18','name' => 'Department of Psychiatry','slug' => 'Department-of-Psychiatry','is_active' => '1','created_at' => '2022-01-24 14:58:34','updated_at' => '2022-01-24 14:58:34'),
            array('id' => '19','name' => 'Haematology & Oncology','slug' => 'Haematology-and-Oncology','is_active' => '1','created_at' => '2022-01-24 14:59:13','updated_at' => '2022-01-24 14:59:13'),
            array('id' => '20','name' => 'Medicine, Diabetes, Gastroenterology & Liver','slug' => 'Medicine-Diabetes-Gastroenterology-and-Liver','is_active' => '1','created_at' => '2022-01-24 14:59:58','updated_at' => '2022-01-24 14:59:58'),
            array('id' => '21','name' => '(ENT & Head Neck Surgery)','slug' => '(ENT-and-Head-Neck-Surgery)','is_active' => '1','created_at' => '2022-01-24 15:00:24','updated_at' => '2022-01-24 15:00:24'),
            array('id' => '22','name' => 'Medicine','slug' => 'Medicine','is_active' => '1','created_at' => '2022-01-24 15:01:05','updated_at' => '2022-01-24 15:01:05'),
            array('id' => '23','name' => 'Medicine & Diabetes','slug' => 'Medicine-and-Diabetes','is_active' => '1','created_at' => '2022-01-24 15:02:07','updated_at' => '2022-01-24 15:02:07'),
            array('id' => '24','name' => 'Diabetes and Endocrinology','slug' => 'Diabetes-and-Endocrinology','is_active' => '1','created_at' => '2022-01-24 15:02:25','updated_at' => '2022-01-24 15:02:25'),
            array('id' => '25','name' => 'Urology','slug' => 'Urology','is_active' => '1','created_at' => '2022-01-24 15:02:43','updated_at' => '2022-01-24 15:02:43'),
            array('id' => '26','name' => 'Oncology','slug' => 'Oncology','is_active' => '1','created_at' => '2022-01-24 15:03:03','updated_at' => '2022-01-24 15:03:03'),
            array('id' => '27','name' => 'Medicine , Diabetic and Nephrology','slug' => 'Medicine-Diabetic-and-Nephrology','is_active' => '1','created_at' => '2022-01-24 15:04:09','updated_at' => '2022-01-24 15:04:09'),
            array('id' => '28','name' => 'Heapato-Billary -Pancreatic -Surgeon','slug' => 'Heapato-Billary-Pancreatic-Surgeon','is_active' => '1','created_at' => '2022-01-24 15:06:07','updated_at' => '2022-01-24 15:06:07'),
            array('id' => '29','name' => 'Pediatric Hematology & Oncology','slug' => 'Pediatric-Hematology-and-Oncology','is_active' => '1','created_at' => '2022-01-24 15:06:36','updated_at' => '2022-01-24 15:06:36'),
            array('id' => '30','name' => 'Neurology , Medicine, Diabetics & Sleep Medicine','slug' => 'Neurology-Medicine-Diabetics-and-Sleep-Medicine','is_active' => '1','created_at' => '2022-01-24 15:07:08','updated_at' => '2022-01-24 15:07:08'),
            array('id' => '31','name' => 'Psychology','slug' => 'Psychology','is_active' => '1','created_at' => '2022-01-24 15:07:44','updated_at' => '2022-01-24 15:07:44'),
            array('id' => '32','name' => 'Colorectal surgery','slug' => 'Colorectal-surgery','is_active' => '1','created_at' => '2022-01-24 15:08:05','updated_at' => '2022-01-24 15:08:05'),
            array('id' => '33','name' => 'Physical Medicine & Rehabilitation','slug' => 'Physical-Medicine-and-Rehabilitation','is_active' => '1','created_at' => '2022-01-24 15:08:30','updated_at' => '2022-01-24 15:08:30'),
            array('id' => '34','name' => 'Nephrology & Dialysis','slug' => 'Nephrology-and-Dialysis','is_active' => '1','created_at' => '2022-01-24 15:09:00','updated_at' => '2022-01-24 15:09:00'),
            array('id' => '35','name' => 'Food & Nutrition','slug' => 'Food-and-Nutrition','is_active' => '1','created_at' => '2022-01-24 15:09:27','updated_at' => '2022-01-24 15:09:27'),
            array('id' => '36','name' => 'Radiotherapy','slug' => 'Radiotherapy','is_active' => '1','created_at' => '2022-01-25 11:29:18','updated_at' => '2022-01-25 11:29:18')
        ));
    }
}
