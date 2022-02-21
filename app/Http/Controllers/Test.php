<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function helloDb(){

        $genre = DB::table('genres')->select('slug')->get();
        // $tables = DB::select('SHOW TABLES');

 
        // return view('genre.slug', ['users' => $genres]);
    }
}
