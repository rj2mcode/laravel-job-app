<?php

namespace App\Http\Controllers;

use App\Models\laraJob;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LaraJobController extends Controller
{
    //show all posts in index view
    public function index()
    {

        return view('posts.index', ['larajobs' => laraJob::latest()->filter(request(['search','tag']))->get(),]);
    }

    //show single post in show view
    public function show(laraJob $larajob)
    {
        return view('posts.show', ['larajob' => $larajob]);
    }

    //show create job view
    public function create()
    {
        return view('posts.create');
    }

    //store new job
    public function store(Request $request)
    {
        //validating received data
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required',Rule::Unique('lara_jobs','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' =>'required'
        ]);

        laraJob::create($formFields);

        return redirect('/')->with('message','New Job Added Successfully!');
    }
}
