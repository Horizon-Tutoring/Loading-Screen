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
            'question'=>'How do I get started?',
            'answer'=>'Getting started is very simple with Horizon Tutoring. Click the "Find Out More" button in the navigation bar to get started, and take a look at our process above!',
        ]);

        FAQ::create([
            'question'=>'How much is the service?',
            'answer'=>'We will give you a call with information about our service prices. This will allow for us to tailor our services to fit your budget.',
        ]);

        FAQ::create([
            'question'=>'Why should I pick you over the competition?',
            'answer'=>"Unlike the competition, we have a genuine, driven passion to see your child reach their maximum potential, which is why we have weekly catch-up sessions to check on your child's progress.",
        ]);
    }
}
