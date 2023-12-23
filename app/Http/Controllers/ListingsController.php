<?php

namespace App\Http\Controllers;

use App\Models\listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index()
    {
        $listings = listings::orderBy('id', 'desc')->paginate(8);
        return view('Listings.index', compact('listings'));
    }
    
    public function show(string $id)
    {
        $listing = listings::find($id);
        return view('Listings.show', compact("listing"));
    }
}
