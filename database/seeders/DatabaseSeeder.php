<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        FAQ::create([
            'question'=>'What subjects do we offer?',
            'image'=>'assets/img/faq_subjects.jpg',
            'atribute'=>'https://www.freepik.com/free-vector/book-with-lighbulb-cartoon-vector-icon-illustration-object-education-icon-concept-isolated-premium-vector-flat-cartoon-style_21948351.htm#query=school%20subjects&position=11&from_view=search&track=sph%22%3EImage',
            'answer'=>'Here at Horizon we have expert tutors in a broad range of subjects including but not limited to; English, Maths, Biology, History, Chemistry, Economics, Psychology and Music. Ask us in our ‘Find Out More’ tab for any specific subjects of interest to your student',
        ]);

        FAQ::create([
            'question'=>'How long are our sessions?',
            'image'=>'assets/img/faq_sessions.jpg',
            'atribute'=>'https://www.freepik.com/free-vector/stopwatch-timer-cartoon-icon-illustration_11759983.htm#query=timer&position=2&from_view=search&track=sph%22%3EImage',
            'answer'=>'Our sessions have been designed around a 25 minute timeframe as the ideal length to achieve your desired outcomes while being able to keep your child focused and limit wasted time.',
        ]);

        $this->call([
            StaffSeeder::class,
        ]);
    }
}
