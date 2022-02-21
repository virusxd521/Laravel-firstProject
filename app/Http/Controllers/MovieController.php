<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{   
    
    public function topRated(){
        $genre = DB::select('SELECT * FROM movies ORDER BY rating LIMIT 50' );
        // return $genre[0]->name;
        return view('movies.top-rated')->with('genre', $genre);
    }


    public function search(){
        return view('movies.search');
    }
        //
}
