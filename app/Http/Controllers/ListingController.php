<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show create a listing form
    public function create()
    {
        return view('listings.create');
    }

    // Store a new listing
    public function store()
    {
        // Validate the form
        $attributes = request()->validate([
            'title' => 'required|min:3|max:255',
            'company' => 'required|min:3|max:255',
            'location' => 'required|min:3|max:255',
            'website' => 'required|url',
            'email' => 'required|email',
            'tags' => 'required',
            'description' => 'required|min:3|max:1000'
        ]);

        // Create the listing
        Listing::create($attributes);

        // Redirect to home page
        return redirect('/')->with('success', 'Listing was created successfully!');
    }
}
