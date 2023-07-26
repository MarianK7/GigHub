<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
/ Common routes naming conventions
/ index - list all records
/ show - show a single record
/ create - show a form to create a new record
/ store - save a new record
/ edit - show a form to edit a record
/ update - save an edited record
/ destroy - delete a record
*/

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show create a listing
Route::get('/listings/create', [ListingController::class, 'create']);

// Store a new listing
Route::post('/listings', [ListingController::class, 'store']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);