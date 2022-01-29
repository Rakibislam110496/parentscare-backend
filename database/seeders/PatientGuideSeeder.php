<?php

namespace Database\Seeders;

use App\Models\PatientGuide;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientGuide::insert(array(
            array('id' => '1','name' => 'Patient Guide','email' => 'patientguide@test.com','password' => '$2y$10$h3YW.5MegtMAFaKy.Q5siOiAb.LVZcWbMB4MhQHDLVfW.ThTaYu8y','phone' => '01245865945','dob' => '2021-11-21 00:00:00','gender' => 'female','location' => 'South central road, khulna','bio' => 'I am good at guiding my patients, hire me now...','photo' => 'http://127.0.0.1:8000/uploads/9xgdAqnzGb.1639811646.jpg','price' => '999','discount' => '10','share' => '10','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-25 11:07:00'),
            array('id' => '2','name' => 'Md. Maruf Rahman','email' => 'marufaz@gmail.com','password' => '$2y$10$6A/3OTSjCIuogfRL2QqBCe5aRiWDstbs72fZ8TD5owyWoNVZ9lX7O','phone' => '01611351666','dob' => '1980-11-11 00:00:00','gender' => '1','location' => 'Dhanmondi,Kalabagan,Shahbag,Gulshan','bio' => 'You can trust me, I will take care of you very supportively.','photo' => 'https://bbox.parentscare.xyz/uploads/LvWUdnE7rH.1643267680.png','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:17:41','updated_at' => '2022-01-27 13:17:41'),
            array('id' => '3','name' => 'Md. Samiul Islam','email' => 'Samiul@gmail.com','password' => '$2y$10$R5d/Uq5N9XNsYZtRQw2z3u8enu1nVFmigeAS2f/jFiCSxWFrtKoia','phone' => '01817565799','dob' => '1999-11-11 00:00:00','gender' => '1','location' => 'Farmgate,Dhanmondi,Uttara','bio' => 'Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/qa26WR8PHI.1643267940.png','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:20:59','updated_at' => '2022-01-27 13:20:59'),
            array('id' => '4','name' => 'Md. Ariful Islam','email' => 'ariful3@gmail.com','password' => '$2y$10$.MLsS.XsN1H3gWs6s.KigOk5.O1f19pZfdi5bdxzFTfSv95C6ZYIC','phone' => '01624355510','dob' => '2000-11-09 00:00:00','gender' => '1','location' => 'Basundhara ,Baridhara,Mohakhali','bio' => 'Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/704w8o2ZwO.1643268085.png','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:23:15','updated_at' => '2022-01-27 13:23:15'),
            array('id' => '5','name' => 'Abu Hider Misha','email' => 'misha@gmail.com','password' => '$2y$10$V09RVFeJoqGOrMIVLLBn/O1scb1.Ihem4NztZUTbFSWvAx2FNnD4u','phone' => '01812366207','dob' => '1988-12-31 00:00:00','gender' => '1','location' => 'Dhanmondi,Kalabagan,Shahbag,Gabtoli','bio' => 'Abu Hider Misha
Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/bw7PTgRQSA.1643268224.png','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:25:26','updated_at' => '2022-01-27 13:25:26'),
            array('id' => '6','name' => 'Md. Ashik','email' => 'ashik@gmail.com','password' => '$2y$10$wlmHX/jcgVs4rZ.VVBQe/OZ/YgOei2KCtBSlA2NWp5HPJgEimewbG','phone' => '01996594329','dob' => '1879-11-11 00:00:00','gender' => '1','location' => 'Dhanmondi','bio' => 'Md. Ashik
Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/fBy4eSOjn1.1643268348.png','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:27:25','updated_at' => '2022-01-27 13:27:25'),
            array('id' => '7','name' => 'Yeasin Islam Ridoy','email' => 'ridoy@gmail.com','password' => '$2y$10$R2usyk1NC52I0k1tcDMqguG/PbDz9lPUtg8LfaFfk.zQrDQltplxm','phone' => '01680763825','dob' => '1999-12-13 00:00:00','gender' => '1','location' => 'Azimpur,Lalbag','bio' => 'Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/PQBjiLwzsx.1643268470.png','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:29:11','updated_at' => '2022-01-27 13:29:11'),
            array('id' => '8','name' => 'Nur E Alam','email' => 'nur@gmail.com','password' => '$2y$10$EyWyvauDf2IlLt8Ri9J8FOc2dNYzXApTsgUWmgDZlcVG95DvlrESS','phone' => '01772438105','dob' => '1999-01-01 00:00:00','gender' => '1','location' => 'Dhanmondi,Kalabagan,Azimpur,Mohammadpur','bio' => 'Nur E Alam
Mobile- 01772438105','photo' => 'https://bbox.parentscare.xyz/uploads/Kwemyxx5Fd.1643268582.jpeg','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:31:00','updated_at' => '2022-01-27 13:31:00'),
            array('id' => '9','name' => 'S.M. Samsul Islam','email' => 'samsu@gmail.com','password' => '$2y$10$YHwdTRSMv6gyWUM8za8zDeeafp1z13PQTOPdvKCaYtqwJu8utITLO','phone' => '01644049755','dob' => '1998-11-11 00:00:00','gender' => 'Female','location' => 'Mirpur,Dhanmondi,Uttara,Gulshan,Banani','bio' => 'Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/nhCUWPBGxD.1643268684.jpeg','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 13:33:15','updated_at' => '2022-01-27 13:33:15'),
            array('id' => '10','name' => 'Amongfrue Marmaa','email' => 'marma@gmail.com','password' => '$2y$10$Wy1sObY.2O5wGSWi8jr37eQAEzh7x2Kc1En4dHEbEb9.TIHThqoaS','phone' => '01591142782','dob' => '1993-11-11 00:00:00','gender' => '1','location' => 'Mirpur,Dhanmondi,Uttara,Gulshan,Banani','bio' => 'Professional Caregiver Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/X3XKpTxlx2.1643272130.jpeg','price' => '1200','discount' => '10','share' => '20','is_active' => '1','created_at' => '2022-01-27 14:32:57','updated_at' => '2022-01-27 14:32:57'),
            array('id' => '11','name' => 'ZAKARIA RIASHAT','email' => 'riashat@gmail.com','password' => '$2y$10$jYQ3ryZSxmrD2zGrD/YThe3m/z4kfRH02jXSVfTdxRG50FkJhmIOm','phone' => '01682980408','dob' => '1998-02-01 00:00:00','gender' => '1','location' => 'Dhanmondi','bio' => 'Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/YlVXdcAqyi.1643272411.jpeg','price' => '1200','discount' => '10','share' => '30','is_active' => '1','created_at' => '2022-01-27 14:37:45','updated_at' => '2022-01-27 14:37:45'),
            array('id' => '12','name' => 'Aklasur Rahman Suman','email' => 'aklas@gmail.com','password' => '$2y$10$UC3GfYHZNh1.F9KOOCqIpO3f1bQVH6HgYrdRAImYJSpbmZSpDR3eW','phone' => '01911617419','dob' => '1998-03-12 00:00:00','gender' => '1','location' => 'Green road,Dhanmondi,Gulshan','bio' => 'Professional Patients Guide','photo' => 'https://bbox.parentscare.xyz/uploads/ElvKOz0Lak.1643272765.jpeg','price' => '1200','discount' => '10','share' => '30','is_active' => '1','created_at' => '2022-01-27 14:44:09','updated_at' => '2022-01-27 14:44:09')
        ));
    }
}
