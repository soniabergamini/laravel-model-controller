<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        // Get moviews data from database
        $movies = Movie::all();

        return view('homepage', compact('movies'));
    }
}
