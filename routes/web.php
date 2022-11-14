<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

//all listings
Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);




//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
//Submit edit
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Submit delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
