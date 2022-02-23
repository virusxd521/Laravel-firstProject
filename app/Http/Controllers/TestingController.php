<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;


class TestingController extends Controller
{
    public function fetchData(){
        $movies = Movies::find(1);
        return view('testing', compact('movies'));
    }
}
