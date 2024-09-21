<?php

namespace App\Http\Controllers;

use App\Models\laraJob;
use Illuminate\Http\Request;

class LaraJobController extends Controller
{
    public function index()
    {
        //show all posts in index page
        return view('posts.index', ['larajobs' => laraJob::latest()->filter(request(['search','tag']))->get(),]);
    }

    public function show(laraJob $larajob)
    {
        //show single post in show page
        return view('posts.show', ['larajob' => $larajob]);
    }
}
