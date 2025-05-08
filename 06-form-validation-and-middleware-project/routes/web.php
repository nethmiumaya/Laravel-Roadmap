<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('Home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/create',function(){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        abort(404, 'Job not found');
    }

    return view('jobs.show', ['job' => (object) $job]); // Cast $job to an object for Blade compatibility
});

Route::post('/jobs',function(){
   //validation
request()->validate([
      'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
   ]);


   Job::create([
       'title' => request('title','min:3'),
       'company' => request('company'),
       'employer_id' => 1,
   ]);
   return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});