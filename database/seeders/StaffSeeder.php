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
            'bio' => 'Founder & CEO of Horizon Tutoring, Gab is the brains behind this operation.',
        ]);

        Staff::create([
            'name' => 'Joshua Micallef',
            'position' => 'Chief Technology Officer',
            'bio' => 'Responsible for all systems and web operations for Horizon Tutoring. Custom made systems which are designed to provide the easiest site to navigate.',
        ]);

        Staff::create([
            'name' => 'Stepan Tkatchenko',
            'position' => 'Chief Finance Officer',
            'bio' => 'tbc',
        ]);

        Staff::create([
            'name' => 'Isabella Chantrill',
            'position' => 'Tutor',
            'bio' => 'tbc',
        ]);

        Staff::create([
            'name' => 'Joe Grew',
            'position' => 'Tutor',
            'bio' => 'tbc',
        ]);
    }
}
