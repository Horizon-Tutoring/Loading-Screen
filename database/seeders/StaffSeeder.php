<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::create([
            'name' => 'Gab Wilson',
            'position' => 'Founder & CEO',
            'bio' => 'Inspired to make education accessible and effective for all, Gabriel founded Horizon Tutoring to make a difference in the lives of students . After graduating in 2020 with an ATAR of 99.50, he is now enjoying a dual degree in Law and Science. Gabriel specializes in English and Science tutoring and has a passion for helping students reach their full potential.',
        ]);

        Staff::create([
            'name' => 'Joshua Micallef',
            'position' => 'Chief Technology Officer',
            'bio' => 'Driven to provide the most reliable, modern and easy system to utilise, Joshua joined Horizon Tutoring in the early stages as the Web Guru. Responsible for all tech systems and operations for Horizon Tutoring Services, introducing multiple custom made systems which are designed to provide the best learning platform for your student.',
        ]);

        Staff::create([
            'name' => 'Stepan Tkatchenko',
            'position' => 'Chief Finance Officer',
            'bio' => 'As a current student of a dual degree in Law and Business, Stepan is the forefront specialist in finance and legal matters for Horizon Tutoring. Also passionate in the humanities fields, Stepan has long-term experience in Guild and AMEB piano theory and practical tutoring, as well as extensive knowledge on the subjects of History, Legal Studies, English and Economics.',
        ]);

        Staff::create([
            'name' => 'Isabella Chantrill',
            'position' => 'Director of Tutoring',
            'bio' => 'A UQ graduate with over seven years of tutoring experience, Isabella is one of our head tutors specialising in Science and English tutoring. A passionate tutor, Isabella has worked to support students with diverse learning needs such as English Second Language (ESL) students and students with ADHD.',
        ]);
    }
}
