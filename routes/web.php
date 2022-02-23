<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\ReviewController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ HomeController::class, 'index' ]);

// My manuall route
Route::get('/top-rated-movies', [ MovieController::class, 'topRated' ]);

// 4 exercise
Route::get('/search', [ MovieController::class, 'search' ]);


// About page Exercise -- Day 31
Route::get('/about-us', [ AboutController::class, 'aboutUs' ]);


// Simple select testing
Route::get('/testing', [ TestingController::class, 'fetchData' ]);

// Reviews exercise
Route::post('/movies/rate', [ ReviewController::class, 'store' ]);
