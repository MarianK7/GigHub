<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest gigs',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Need a WordPress site built',
                'description' => 'I need a WordPress site built for my business. I already have a design, I just need you to build the theme.',
                'budget' => 5000
            ],
            [
                'id' => 2,
                'title' => 'Laravel developer needed',
                'description' => 'I need someone to complete my Laravel website. I already have a design, I just need you to build a few pages.',
                'budget' => 3000
            ]
            
        ]
    ]);
});
