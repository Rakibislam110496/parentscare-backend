<?php

namespace Database\Seeders;

use App\Models\TherapistLocation;
use Illuminate\Database\Seeder;

class TherapistLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TherapistLocation::insert(array(
            array('id' => '1','address' => 'Mirpur, Dhaka','price' => '500','share' => '10','discount' => '10','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '2','address' => 'Uttara','price' => '1500','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:51:53','updated_at' => '2022-01-25 12:51:53'),
            array('id' => '3','address' => 'RAMPURA','price' => '1200','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:52:20','updated_at' => '2022-01-25 12:52:20'),
            array('id' => '4','address' => 'GULSHAN','price' => '2000','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:52:49','updated_at' => '2022-01-25 12:52:49'),
            array('id' => '5','address' => 'MOHAKHALI','price' => '1500','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:53:14','updated_at' => '2022-01-25 12:53:14'),
            array('id' => '6','address' => 'DHANMONDI','price' => '2000','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:53:36','updated_at' => '2022-01-25 12:53:36'),
            array('id' => '7','address' => 'BADDA','price' => '1200','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:53:58','updated_at' => '2022-01-25 12:53:58'),
            array('id' => '8','address' => 'MIRPUR','price' => '1000','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 12:54:35','updated_at' => '2022-01-25 12:54:35'),
            array('id' => '9','address' => 'TONGI','price' => '1200','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:55:02','updated_at' => '2022-01-25 12:55:02'),
            array('id' => '10','address' => 'AIRPORT','price' => '1400','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 12:55:33','updated_at' => '2022-01-25 12:55:33'),
            array('id' => '11','address' => 'ABDULLAHPUR','price' => '1500','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 12:55:57','updated_at' => '2022-01-25 12:55:57'),
            array('id' => '12','address' => 'BARIDHARA','price' => '2000','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 12:59:39','updated_at' => '2022-01-25 12:59:39'),
            array('id' => '13','address' => 'BANANI','price' => '2000','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:00:04','updated_at' => '2022-01-25 13:00:04'),
            array('id' => '14','address' => 'MIRPUR DOHS','price' => '1500','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:01:05','updated_at' => '2022-01-25 13:01:05'),
            array('id' => '15','address' => 'BASHUNDHARA DOHS','price' => '2000','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:01:43','updated_at' => '2022-01-25 13:01:43'),
            array('id' => '16','address' => 'PALTAN','price' => '1500','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:02:15','updated_at' => '2022-01-25 13:02:15'),
            array('id' => '17','address' => 'MOGBAZAR','price' => '1500','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:29:59','updated_at' => '2022-01-25 13:29:59'),
            array('id' => '18','address' => 'BANASREE','price' => '1400','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:33:28','updated_at' => '2022-01-25 13:33:28'),
            array('id' => '19','address' => 'SHAYMOLI','price' => '1400','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:33:57','updated_at' => '2022-01-25 13:33:57'),
            array('id' => '20','address' => 'MOHAMMADPUR','price' => '1500','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:34:15','updated_at' => '2022-01-25 13:34:15'),
            array('id' => '21','address' => 'KALLYANPUR','price' => '1500','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:34:37','updated_at' => '2022-01-25 13:34:37'),
            array('id' => '22','address' => 'PALTAN','price' => '1400','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:35:17','updated_at' => '2022-01-25 13:35:17'),
            array('id' => '23','address' => 'SHAHBAG','price' => '1200','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:35:38','updated_at' => '2022-01-25 13:35:38'),
            array('id' => '24','address' => 'KHILKHET','price' => '1300','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:36:06','updated_at' => '2022-01-25 13:36:06'),
            array('id' => '25','address' => 'KALABAGAN','price' => '1500','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:39:00','updated_at' => '2022-01-25 13:39:00'),
            array('id' => '26','address' => 'NEW MARKET','price' => '1500','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-25 13:39:22','updated_at' => '2022-01-25 13:39:22'),
            array('id' => '27','address' => 'AZIMPUR','price' => '1500','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:39:52','updated_at' => '2022-01-25 13:39:52'),
            array('id' => '28','address' => 'PURAN DHAKA','price' => '1500','share' => '20','discount' => '10','is_active' => '1','created_at' => '2022-01-25 13:40:27','updated_at' => '2022-01-25 13:40:27'),
            array('id' => '29','address' => 'Tejgaon','price' => '1200','share' => '25','discount' => '0','is_active' => '1','created_at' => '2022-01-26 12:44:59','updated_at' => '2022-01-26 12:44:59'),
            array('id' => '30','address' => 'Jatrabari','price' => '1200','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-26 12:45:23','updated_at' => '2022-01-26 12:45:23'),
            array('id' => '31','address' => 'Mugda','price' => '1200','share' => '20','discount' => '0','is_active' => '1','created_at' => '2022-01-26 12:45:48','updated_at' => '2022-01-26 12:45:48')
        ));
    }
}
