<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\elearning;

class ElearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        elearning::create([
            'title1' => 'ABOUT US',
            'title2' => 'Welcome to eLEARNING',
            'title3' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.',
            'title4' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet',
            'title5' => 'Skilled Instructors',
            'title6' => 'International Certificate',
            'title7' => 'Online Classes',
            'title8' => 'Online Classes',
            'title9' => 'Skilled Instructors',
            'title10' => 'International Certificate',
        ]);
    }
}
