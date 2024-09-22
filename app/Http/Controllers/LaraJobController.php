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

        return view('posts.index', ['larajobs' => laraJob::latest()->filter(request(['search', 'tag']))->SimplePaginate(4),]);
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
            'company' => ['required', Rule::Unique('lara_jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            //dd($request->file('logo'));
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        laraJob::create($formFields);

        return redirect('/')->with('message', 'New Job Added Successfully!');
    }

    //show edit job view
    public function edit(laraJob $larajob)
    {
        return view('posts.edit',['larajob' => $larajob]);
    }

    //store new job
    public function update(Request $request, laraJob $larajob)
    {
        //validating received data
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            //dd($request->file('logo'));
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $larajob->update($formFields);

        return back()->with('message', 'Job Updated Successfully!');
    }

    public function destroy(laraJob $larajob)
    {
        $larajob->delete();
        return redirect('/')->with('message', 'The Job Deleted Successfully!');
    }
}
