<?php

namespace App\Http\Controllers;

use App\Models\elearning;
use App\Models\home;
use App\Http\Requests\StoreelearningRequest;
use App\Http\Requests\UpdateelearningRequest;

class ElearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $homes = Elearning::get();
        dd($homes);
    
        return view('home', [
            'home' => $homes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreelearningRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreelearningRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function show(elearning $elearning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function edit(elearning $elearning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateelearningRequest  $request
     * @param  \App\Models\elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateelearningRequest $request, elearning $elearning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function destroy(elearning $elearning)
    {
        //
    }
}
