<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Berita;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $items = Guru::get();
        $berita = Berita::get();

        return view('guru', [
            'items' => $items,
            'berita' => $berita,
        ]);
    }
}
