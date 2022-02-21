<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         home::create([
            'title1' => 'Best Online Courses',
            'title2' => 'The Best Online Learning Platform',
            'title3' => 'Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.',
            'title4' => 'Skilled Instructors',
            'title5' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
        ]);

         home::create([
            'title1' => 'Best Online Courses',
            'title2' => 'Get Educated Online From Your Home',
            'title3' => 'Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.',
            'title4' => 'Online Classes',
            'title5' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
        ]);

        home::create([
            'title1' => 'Best Online Courses',
            'title2' => 'Get Educated Online From Your Home',
            'title3' => 'Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.',
            'title4' => 'Home Projects',
            'title5' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
        ]);

        home::create([
            'title1' => 'Best Online Courses',
            'title2' => 'Get Educated Online From Your Home',
            'title3' => 'Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.',
            'title4' => 'Book Library',
            'title5' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
        ]);
    }
}
