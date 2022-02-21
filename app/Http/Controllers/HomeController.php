<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\student;
use App\Models\elearning;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $homes = Home::get();
        $el = Elearning::get();
        $st = student::all();
        // dd($st);
        return view('home', [
            'home' => $homes,
            'el' => $el,
            'st' => $st,
        ]);
    }
}
