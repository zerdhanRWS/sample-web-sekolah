<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        student::create([
            'title1' => 'Testimonial',
            'title2' => 'Our Students Say!',
            'gambar1' => 'img/testimonial-1.jpg',
            'title3' => 'profesi',
            'title4' => 'Client Name',
            'title5' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        ]);

        student::create([
            'title1' => 'Testimonial',
            'title2' => 'Our Students Say!',
            'gambar1' => 'img/testimonial-2.jpg',
            'title3' => 'profesi',
            'title4' => 'Client Name',
            'title5' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        ]);

        student::create([
            'title1' => 'Testimonial',
            'title2' => 'Our Students Say!',
            'gambar1' => 'img/testimonial-3.jpg',
            'title3' => 'profesi',
            'title4' => 'Client Name',
            'title5' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        ]);

        student::create([
            'title1' => 'Testimonial',
            'title2' => 'Our Students Say!',
            'gambar1' => 'img/testimonial-4.jpg',
            'title3' => 'profesi',
            'title4' => 'Client Name',
            'title5' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.',
        ]);
    }
}
