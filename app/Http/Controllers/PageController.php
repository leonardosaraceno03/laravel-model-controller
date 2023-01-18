<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        // 'select * from books'
        $all_movies = Movie::all();

        return view('welcome', compact('all_movies'));
    }
}
