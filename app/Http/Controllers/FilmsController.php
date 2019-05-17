<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index()
    {
        $films = \App\Films::all();
        return view('films.index',compact('films'));
    }

    public function show($id)
    {
        $film = \App\Films::find($id);
        return view ('films.show',compact('film'));
    }
}
