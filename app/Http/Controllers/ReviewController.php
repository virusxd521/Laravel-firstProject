<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    //
    public function store(){
        $review = new Review;
        $review->review = $_POST['value'];
        $review->save();
        return redirect()->back();
    }
}
