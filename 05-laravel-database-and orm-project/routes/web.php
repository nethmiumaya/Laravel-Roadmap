<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('Home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (!$job) {
        abort(404, 'Job not found');
    }

    return view('job', ['job' => (object) $job]); // Cast $job to an object for Blade compatibility
});

Route::get('/contact', function () {
    return view('contact');
});