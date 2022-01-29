<?php

namespace Database\Seeders;

use App\Models\Therapist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TherapistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Therapist::insert(array(
            array('id' => '1','therapist_location_id' => '1','name' => 'Therapist','email' => 'therapist@test.com','phone' => '02342343213','password' => '$2y$10$X07eLpR9FEt8QgWlNwhWreFP/c7tBQZoaC5quGv4VLl3gQX4IOsua','gender' => 'male','dob' => '2021-12-11 00:00:00','bio' => 'Mobile beshi tepa jabe na, this is bad for health...','photo' => 'http://127.0.0.1:8000/uploads/iqlQz6Q0Cx.1639926846.jpg','availabilities' => 'saturday,sunday,monday,tuesday','is_active' => '1','created_at' => '2022-01-23 22:31:19','updated_at' => '2022-01-23 22:31:19'),
            array('id' => '2','therapist_location_id' => '4','name' => 'Lutfar Rahman Lebu','email' => 'LEBU@GMAIL.COM','phone' => '01717130255','password' => '$2y$10$t9cVT7nZdkd09CE0YccyuOU.Uoh7LNB.CDvBEC9o5TOxbTFZ48gZy','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Physiotherapist
Upazila Health Complex Begumganj, Noakhali.
Deputed  Institute of Health Technology
Mohakhali, Dhaka.
Chief Executive Officer   Physio Rehab Center.Physiotherapist
Upazila Health Complex Begumganj, Noakhali.
Deputed  Institute of Health Technology
Mohakhali, Dhaka.
Chief Executive Officer   Physio Rehab Center.','photo' => 'https://bbox.parentscare.xyz/uploads/iSMAZtW8Vt.1643271690.png','availabilities' => '["Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday"]','is_active' => '1','created_at' => '2022-01-25 13:51:55','updated_at' => '2022-01-27 14:21:36'),
            array('id' => '3','therapist_location_id' => '13','name' => 'Abdullah Al Momen','email' => 'MOMEN@GMAIL.COM','phone' => '01812345678','password' => '$2y$10$Y/Kj2tUm8jJMG0/fz3exSOG5MmqWGCSVq6kfDP7wBbSVpmxxL9qte','gender' => '1','dob' => '1994-11-11 00:00:00','bio' => 'Physiotherapist
National Institute Of Neurosciences & Hospital, Dhaka','photo' => 'https://bbox.parentscare.xyz/uploads/nlZSelgxdh.1643097604.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 14:04:36','updated_at' => '2022-01-25 14:04:36'),
            array('id' => '4','therapist_location_id' => '5','name' => 'Md.Shahadat Hossain','email' => 'shahadot@gmail.com','phone' => '01712493230','password' => '$2y$10$iJb1xKcHfEFErYERc7wYTua43VpSwXSygJwCW9rTIsCO8VJ7VPDti','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Md.Shahadat Hossain
Physiotherapist Chattogram Medical College Hospital.
Deputed Institute of health technology Mohakhali, Dhaka.','photo' => 'https://bbox.parentscare.xyz/uploads/KwzzYwHaQg.1643102763.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:29:41','updated_at' => '2022-01-25 15:29:41'),
            array('id' => '5','therapist_location_id' => '12','name' => 'Md.Shahidullah','email' => 'sahidullah@gmail.com','phone' => '01874747474','password' => '$2y$10$L9mwtNqqBx1pBSyJ4QWjUe0EtiWTYWucFA4W/4YXtQuTJHg4XiaJK','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'B.sc in Physiotherapy under medicine faculty of Dhaka university
Physiotherapist
Ibna Sina Diagnostic Center Uttara, Dhaka.','photo' => 'https://bbox.parentscare.xyz/uploads/ebtUjVAsuM.1643103030.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:32:27','updated_at' => '2022-01-25 15:32:27'),
            array('id' => '6','therapist_location_id' => '7','name' => 'Mohammad Naimur Rahman','email' => 'naimur@gmail.com','phone' => '01728228558','password' => '$2y$10$/EMmmFhpgqK7V7SEO9Vo9uC1MmjpfQG1AX0s5QpxtZZU4fLW1nLuG','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Physiotherapist.
Mugda Medical College hospital Dhaka.','photo' => 'https://bbox.parentscare.xyz/uploads/avUzYMy18X.1643103335.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:37:23','updated_at' => '2022-01-25 15:37:23'),
            array('id' => '7','therapist_location_id' => '15','name' => 'Mst Nadia Easmin','email' => 'nadiayeasmin@gmail.com','phone' => '018747474659','password' => '$2y$10$8AJiJMee57pHrMQe9nJqgOggES00SK6yCS/zYje7uignBHR84yCna','gender' => 'Female','dob' => '1988-11-11 00:00:00','bio' => 'Physiotherapist
National Institute of Traumatology and Orthopedic Rehabilitation. (NITOR)Dhaka.','photo' => 'https://bbox.parentscare.xyz/uploads/aCM8EH70uE.1643103541.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:40:46','updated_at' => '2022-01-25 15:40:46'),
            array('id' => '8','therapist_location_id' => '4','name' => 'Rajia Sultana','email' => 'rajia@gmail.com','phone' => '017123456789','password' => '$2y$10$D3c.M3xExbu.teUajb13LOXPFhE3HHsrYdB4PwGXGRjitAjPfiTEG','gender' => 'Female','dob' => '1998-11-11 00:00:00','bio' => 'Raiia Sultana
Ex :physiotherapist
Shahabuddin Medical College and Hospital, Gulshan.','photo' => 'https://bbox.parentscare.xyz/uploads/fSPd8Tin6G.1643103816.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:45:19','updated_at' => '2022-01-25 15:45:19'),
            array('id' => '9','therapist_location_id' => '16','name' => 'Md.Mehadi Hasan Shamim','email' => 'shamim@gmail.com','phone' => '01750484233','password' => '$2y$10$lvXYIRnRjxCl2i6hhDaiYuhl/g5Z9LQPuoiyegSoz2ofeWUZo0QsG','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'Diploma in physiotherapy under State Medical Faculty.
B.sc physiotherapy  Final year B.sc in Physiotherapy under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/qwiVqRoyYK.1643104095.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:54:29','updated_at' => '2022-01-25 15:54:29'),
            array('id' => '10','therapist_location_id' => '17','name' => 'Md Farhad Hossain','email' => 'farhad@gmail.com','phone' => '01742877667','password' => '$2y$10$8PxhXDpbvrybLHX9AgcZHuDok12BXqjgGZETCBTS6AuIWmyjUe562','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'Physiotherapist
 M Abdur Rohim Medical College hospital Dinajpur.
Deputed Institute of health technology Mohakhali Dhaka.','photo' => 'https://bbox.parentscare.xyz/uploads/evz295HoLc.1643104631.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 15:59:56','updated_at' => '2022-01-25 15:59:56'),
            array('id' => '11','therapist_location_id' => '19','name' => 'Md.Tarequl Islam','email' => 'tarequl@gmail.com','phone' => '01725843272','password' => '$2y$10$TkdM4eMte2ekaM5BFIFLv.muUhlqO/JmO0dolV2amI88KfH0REZ7i','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'B.sc in Physiotherapy under medicine faculty of Dhaka university.
Physiotherapist
Ibn Sina Medical College hospital Dhaka','photo' => 'https://bbox.parentscare.xyz/uploads/OviyaIIOIa.1643105527.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 16:13:26','updated_at' => '2022-01-25 16:13:26'),
            array('id' => '12','therapist_location_id' => '2','name' => 'Md.Shaidur Rahman','email' => 'shaidur@gmail.com','phone' => '01874747475','password' => '$2y$10$JN7y0axWKC2MoFer4JvKw.bPH0xxHj2aTUPdb4fwdsWJ./jxfIz9q','gender' => '1','dob' => '2000-11-11 00:00:00','bio' => 'Diploma in physiotherapy under State Medical Faculty.
B.sc in physiotherapy (in course) under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/t9wGJA6o09.1643105782.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 16:20:33','updated_at' => '2022-01-25 16:20:33'),
            array('id' => '13','therapist_location_id' => '1','name' => 'SHAMIMA NASREEN AKHI','email' => 'akhi@gmaio.com','phone' => '01631936428','password' => '$2y$10$fxsGzG8007s0XK1VW..jwOmUAb0fAVBQA7utsbOxno1awPglo9jHO','gender' => 'Female','dob' => '1988-11-11 00:00:00','bio' => 'Education: BsPT, designation: physiotherapist','photo' => 'https://bbox.parentscare.xyz/uploads/RVXOSfp5ZR.1643107577.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 16:47:56','updated_at' => '2022-01-25 16:47:56'),
            array('id' => '14','therapist_location_id' => '1','name' => 'Dr.Nazmun Nahar','email' => 'nazmun@gmail.com','phone' => '01948556496','password' => '$2y$10$koI3QjewwffT1FCoz7HQhetsyjavqpkG3uFfMV1mn1hVxlQifHolq','gender' => 'Female','dob' => '1988-12-11 00:00:00','bio' => 'Physiotherapist','photo' => 'https://bbox.parentscare.xyz/uploads/ejbyL1QSKF.1643107701.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 16:51:58','updated_at' => '2022-01-25 16:51:58'),
            array('id' => '15','therapist_location_id' => '1','name' => 'Dr. Md. Najmul Hossain','email' => 'mdnajmul@gmail.com','phone' => '01715317333','password' => '$2y$10$pdkRg/Xon.uZYhm6aCv8/OEDrtSe0CCcyiMnv4ryR4KA6QtIPNaDy','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'MD, MPH, MCSW (DU)
Counselor
Operation Logistics & Budget.
Enam Medical College & Hospital
সকল প্রকার সার্জারী ও অপারেশন এর তথ্য ও খরচ সম্পর্কে জানতে আজই যোগাযোগ করুন......
Former, Consultant & Officer, JPUF.
Ministry of Social Welfare of Bangladesh','photo' => 'https://bbox.parentscare.xyz/uploads/htd5GPi6i0.1643107946.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 16:54:14','updated_at' => '2022-01-25 16:54:14'),
            array('id' => '16','therapist_location_id' => '5','name' => 'Md.Arifur Rahman Molla','email' => 'ariful@gmail.com','phone' => '01874747467','password' => '$2y$10$BKE/xSyQeBWxOPK.A0xQAeNPh6Pa5GyQ7ofAlD7kTJX0U9FyENJkS','gender' => 'Female','dob' => '1998-11-11 00:00:00','bio' => 'Diploma in physiotherapy
State medical faculty Dhaka','photo' => 'https://bbox.parentscare.xyz/uploads/trJdc46WI1.1643108100.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 16:56:47','updated_at' => '2022-01-25 16:56:47'),
            array('id' => '17','therapist_location_id' => '1','name' => 'DR.MD ROBIUL ISLAM','email' => 'robiul@gmail.com','phone' => '018747474657','password' => '$2y$10$TXE8BaVQHtEJjRdGLxZfs.9eSXMwf1jEMzLg8Y4XPxLUwffI.6cwC','gender' => 'Female','dob' => '1980-11-11 00:00:00','bio' => 'BPT(DU),PGT,PGD(BKSP),consultant Physio therapy','photo' => 'https://bbox.parentscare.xyz/uploads/l36N14P76k.1643114707.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-25 18:46:31','updated_at' => '2022-01-25 18:46:31'),
            array('id' => '18','therapist_location_id' => '1','name' => 'Kamrun  Nahar Jannat','email' => 'jannat4@gmail.com','phone' => '01628006029','password' => '$2y$10$.KyGmd2vJHkos82h8bcnAeDchMKpY7zI/BZaJtxOmHNh9/nkBL.Au','gender' => 'Female','dob' => '1991-11-02 00:00:00','bio' => 'Diploma in physiotherapy under state Medical Faculty.
B.sc in physiotherapy (in course) under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/9L7C3ny6zw.1643114829.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday','is_active' => '1','created_at' => '2022-01-25 18:52:29','updated_at' => '2022-01-25 18:52:29'),
            array('id' => '19','therapist_location_id' => '28','name' => 'Nazmul Haque','email' => 'n.haque@gmail.com','phone' => '01717130255','password' => '$2y$10$r/N.h.JGEFxfbTqeunVETeHLnUyCVOfaGfGodW2mmhOUW0u2Xr3Lm','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'Diploma  physiotherapist
State Medical faculty','photo' => 'https://bbox.parentscare.xyz/uploads/UbLFIJa0uI.1643175098.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Friday,Thursday','is_active' => '1','created_at' => '2022-01-26 11:33:24','updated_at' => '2022-01-26 11:33:24'),
            array('id' => '20','therapist_location_id' => '17','name' => 'Shahinur Rahman','email' => 'shahinur@gmail.com','phone' => '01717130255','password' => '$2y$10$.i6D6LUTLHpgA2L8VdGps.1cgm9s0HO9cvt1ejbE3mj9iK2mJE0I6','gender' => '1','dob' => '1994-11-11 00:00:00','bio' => 'physiotherapist
State Medical faculty','photo' => 'https://bbox.parentscare.xyz/uploads/PGWOkyg5fg.1643175376.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 11:37:59','updated_at' => '2022-01-26 11:37:59'),
            array('id' => '21','therapist_location_id' => '1','name' => 'MD. Masud Rana','email' => 'masudphysio82@gmail.com','phone' => '01681246973','password' => '$2y$10$Uu5vGGRJHABl5Kb97uDU0e.ubR21XGuNPqnp3RislumMa9E2hkWlK','gender' => '1','dob' => '1978-11-11 00:00:00','bio' => 'Name:MD. Masud Rana, father\'s name: MD.Golam Mostafa, Mother\'s Name: Mst.Jomela Begum, Education: BsPT, designation: physiotherapist, Address: h-32 ka,r-02, section-6, Mirpur, Dhaka-1206, zone- Mirpur, NID number-19906911547000231.','photo' => 'https://bbox.parentscare.xyz/uploads/EOUPbiHOaR.1643175647.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 11:42:51','updated_at' => '2022-01-26 11:42:51'),
            array('id' => '22','therapist_location_id' => '1','name' => 'Amir Hamza','email' => 'hamza@gmail.com','phone' => '01717130255','password' => '$2y$10$LI3.EBW38mHueneNJ5rEDeYnE8zN7VVwwmYHpBZ2HzS.VRl6Pp1gC','gender' => '1','dob' => '1999-11-11 00:00:00','bio' => 'Amir Hamza,Diploma  physiotherapist
State Medical faculty','photo' => 'https://bbox.parentscare.xyz/uploads/lLf6rVWtXk.1643175823.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 11:44:51','updated_at' => '2022-01-26 11:44:51'),
            array('id' => '24','therapist_location_id' => '1','name' => 'Md.Tajul Islam','email' => 'tajul@gmail.com','phone' => '01324224174','password' => '$2y$10$5ovMm5H67EuLmaaIsPvNhOS/h.TD6KXo1mEhyuPz3KFj0lWf8TPQu','gender' => 'Female','dob' => '1990-11-11 00:00:00','bio' => 'Md.Tajul Islam
Diploma in physiotherapy
State Medical Faulty  Dhaka
Bsc in physiotherapy (incurs) Faculty of  medicine under Dhaka university','photo' => 'https://bbox.parentscare.xyz/uploads/EDGjMkVwHe.1643175961.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 11:48:50','updated_at' => '2022-01-26 11:48:50'),
            array('id' => '25','therapist_location_id' => '2','name' => 'Mst Shapla Akter','email' => 'shapla@gmail.com','phone' => '01717130255','password' => '$2y$10$YYj6AnCurH8alzEdu0MfUOl2EH/Qkb8PsL1yh7O./PRZGZqdGys/G','gender' => 'Female','dob' => '1999-11-11 00:00:00','bio' => 'Mst Shapla Akter
Diploma in physiotherapy Under Stete Medical Faculty.
B.sc in physiotherapy( in course) under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/3Lz2exnhgU.1643176213.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 11:52:09','updated_at' => '2022-01-26 11:52:09'),
            array('id' => '26','therapist_location_id' => '5','name' => 'Md.Shahidul Islam','email' => 'shahidul@gmail.com','phone' => '01717130255','password' => '$2y$10$FrgGLsxDEcOd.carijzts.pfOEi5IB0FCEyIpJEKMMPpZpSOqFyn.','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'Md.Shahidul Islam
Diploma in physiotherapy under state medical faculty.
B.sc in physiotherapy( in course) under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/jvoBCY26lx.1643178560.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 12:44:07','updated_at' => '2022-01-26 12:44:07'),
            array('id' => '27','therapist_location_id' => '19','name' => 'Md. Motiur Rahman','email' => 'matiur@gmail.com','phone' => '01717130255','password' => '$2y$10$7B7j2ReqhpiPFQB1ORBAcepzCswVk3vmTZzOa7G3reVXfN85WOA2m','gender' => '1','dob' => '1999-11-11 00:00:00','bio' => 'Md. Motiur Rahman
Diploma in physiotherapy
State Medical faculty','photo' => 'https://bbox.parentscare.xyz/uploads/NwX74qV5Rg.1643179674.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Friday,Thursday','is_active' => '1','created_at' => '2022-01-26 12:48:54','updated_at' => '2022-01-26 12:48:54'),
            array('id' => '28','therapist_location_id' => '21','name' => 'Ikrum Hossain','email' => 'ikrum@gmail.com','phone' => '01783404067','password' => '$2y$10$S5Q0gn3P1XPAnSw.z4fNk.gh05zhVK/NEaBhcS7/figpIfsR0RZk6','gender' => '1','dob' => '1978-11-11 00:00:00','bio' => 'Ikrum Hossain
Physiotherapist
Ibn Sina Medical College hospital Dhaka','photo' => 'https://bbox.parentscare.xyz/uploads/tlp3jbi7W8.1643179776.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Friday,Thursday','is_active' => '1','created_at' => '2022-01-26 12:51:45','updated_at' => '2022-01-26 12:51:45'),
            array('id' => '29','therapist_location_id' => '4','name' => 'Mahmudul Hasan Tariq','email' => 'tariq@gmail.com','phone' => '01725843272','password' => '$2y$10$8iXrKp6lw1p38MmKvtUqVu5sA/kUhxImemLRCaN/dlPwhUtA3hIIO','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Mahmudul Hasan  Tariq
Diploma in physiotherapy
State medical faculty, Dhaka
Bsc in physiotherapy (incurs)  Medicine faculty under Dhaka university','photo' => 'https://bbox.parentscare.xyz/uploads/DzG2VTcNz6.1643179929.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Friday,Thursday,Saturday,Sunday','is_active' => '1','created_at' => '2022-01-26 12:53:48','updated_at' => '2022-01-26 12:53:48'),
            array('id' => '30','therapist_location_id' => '7','name' => 'Romjan Ali','email' => 'romjan@gmail.com','phone' => '01785596929','password' => '$2y$10$KjBdQ/Qdth/jK4KXM5J9E.F.bAy3f9lq7ZCFc25dj3/fKBY.W8Vqu','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Romjan Ali
Diploma  physiotherapist
State Medical faculty','photo' => 'https://bbox.parentscare.xyz/uploads/sCwL73250w.1643180063.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 12:59:13','updated_at' => '2022-01-26 12:59:13'),
            array('id' => '31','therapist_location_id' => '28','name' => 'Abu Kawsar Liton','email' => 'liton@gmail.com','phone' => '01763808383','password' => '$2y$10$dnR24hKzDT3VG2yiVZPTC.LzV1KA8qMUd5csa69euU0QbEKYd/Qwa','gender' => '1','dob' => '1988-11-11 00:00:00','bio' => 'Abu Kawsar Liton
Physiotherapist
Salimullah Medical College hospital Dhaka','photo' => 'https://bbox.parentscare.xyz/uploads/TCvOuZ5gUI.1643180489.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 13:03:18','updated_at' => '2022-01-26 13:03:18'),
            array('id' => '32','therapist_location_id' => '30','name' => 'Md.Sabbir Hossain','email' => 'sabbir@gmail.com','phone' => '01791734291','password' => '$2y$10$R2d9HsnRM9B1XQbkGvnyxe/L.pFcyGJU8s9xW5G.xHyAs81.j.1Ly','gender' => '1','dob' => '1978-11-11 00:00:00','bio' => 'Md.Sabbir Hossain
Diploma in physiotherapy under State medical Faculty.
B.sc in physiotherapy( in course) under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/r6ERZKoDXW.1643180691.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 13:07:38','updated_at' => '2022-01-26 13:07:38'),
            array('id' => '33','therapist_location_id' => '6','name' => 'Nadia Islam','email' => 'nadira803@gmail.com','phone' => '01780383803','password' => '$2y$10$Fr7vvyzmAFpZ15pc8db39.y5a7QLJRutCvumt/En0wC2XVe.u7BwK','gender' => 'Female','dob' => '1992-11-11 00:00:00','bio' => 'Nadia Islam
Diploma in physiotherapy
State Medical faculty, Dhaka
Bsc in physiotherapy( incurs) Medicine faculty under Dhaka university','photo' => 'https://bbox.parentscare.xyz/uploads/LadKn0NZNi.1643182226.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 13:35:23','updated_at' => '2022-01-26 13:35:23'),
            array('id' => '34','therapist_location_id' => '21','name' => 'Gulam Mawla','email' => 'mawla@gmail.com','phone' => '01717130255','password' => '$2y$10$5c3POiXuwx0FeALGOhtkm.1O6ogeG5prTh0uETWjXauXCHS3d8um.','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Gulum Mawla
B.sc in physiotherapy (CRP Saver)
Under medicine faculty of Dhaka university.','photo' => 'https://bbox.parentscare.xyz/uploads/XiaJXwL8QC.1643182757.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 13:41:23','updated_at' => '2022-01-26 13:41:23'),
            array('id' => '35','therapist_location_id' => '23','name' => 'Mahbubur  Rahman Rana','email' => 'rana@gmail.com','phone' => '01717268732','password' => '$2y$10$y3IB5Xb8xLKlBlJa0LgE5eemOD2vtNjXhmDsYjNJXlbpejM79DuOC','gender' => '1','dob' => '1999-11-11 00:00:00','bio' => 'Mahbubur  Rahman Rana,Physiotherapist
Gobindaganj,Gaibandha
Deputed, Institute of health technology Mohakhali, Dhaka','photo' => 'https://bbox.parentscare.xyz/uploads/FJp310FToV.1643182922.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 13:44:17','updated_at' => '2022-01-26 13:44:17'),
            array('id' => '36','therapist_location_id' => '1','name' => 'Dr.Md.Fazley Rabbi','email' => 'rabbi@gmail.com','phone' => '01307491702','password' => '$2y$10$XgJhadsnHz.dYtN/.dOL3.UUkvKGgvfQDnxLSLOGRmuDqznvPMKmy','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Dr.Md.Fazley Rabbi
Bachelor of physiotherapy(BPT),PGT.','photo' => 'https://bbox.parentscare.xyz/uploads/psKHpNAB0a.1643185281.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 14:24:43','updated_at' => '2022-01-26 14:24:43'),
            array('id' => '37','therapist_location_id' => '2','name' => 'DR. nessar uddin shaker','email' => 'shaker@gmail.com','phone' => '01947-559304','password' => '$2y$10$cIXWEcy438aiiREegukgHevEqpacXZxBmJc1vAZJp79CAab89Cp/.','gender' => '1','dob' => '1998-11-11 00:00:00','bio' => 'Head of dept. Physiotherapy ,KC hospital and diagnostic center','photo' => 'https://bbox.parentscare.xyz/uploads/JgQyLr2w5R.1643185623.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 14:29:27','updated_at' => '2022-01-26 14:29:27'),
            array('id' => '38','therapist_location_id' => '8','name' => 'Dr.Maymuna Yesmin Shoshi','email' => 'Maymunayesmin10@gmail.com','phone' => '01940695666','password' => '$2y$10$qa3eVRxhBfF9EpMXReui2uPSsQND5/ahRaY5D0kGi6QgHZL9iJdSS','gender' => 'Female','dob' => '1994-11-11 00:00:00','bio' => 'Dr.Maymuna Yesmin Shoshi
BSC in Physiotherapy,
Sports Physiotherapist of  Bangladesh Navy.','photo' => 'https://bbox.parentscare.xyz/uploads/lssIcW3aYW.1643185932.jpeg','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 14:34:10','updated_at' => '2022-01-26 14:34:10'),
            array('id' => '39','therapist_location_id' => '8','name' => 'Md. Utzzal Mahmud','email' => 'uzzal@gmail.com','phone' => '01717130255','password' => '$2y$10$xEW1fv9Ys8NloTPE0SkRie7N.H8sz3eBMmMLwAImXMNZZQvlhvFuC','gender' => '1','dob' => '1988-01-09 00:00:00','bio' => 'Physiotherapist
Upazila Health Compex
Shokhipur,Tangail.
Deputed Institute of health technology Mohakhali Dhaka.','photo' => 'https://bbox.parentscare.xyz/uploads/x7LzT4onzy.1643186443.png','availabilities' => 'Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday','is_active' => '1','created_at' => '2022-01-26 14:42:05','updated_at' => '2022-01-26 14:42:05')
        ));
    }
}
