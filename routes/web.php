<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;

// -------------------- Home Page --------------------
Route::get('/', function () {
    return view('home');
});

// -------------------- /jobs Routes --------------------

// Index - List all jobs
Route::get('/jobs', function () {
    $jobs = Job::with(['employer', 'tags'])->latest()->simplePaginate(3);
    // $jobs = Job::all();

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    // authorize (On hold...)
    
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to the job page
    return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{id}', function ($id) {
    // authorize (On hold/..)

    // delete the jonb

    Job::findOrFail($id)->delete();
    
    return redirect('/jobs');
});

// -------------------- /contact Route --------------------
Route::get('/contact', function () {
    return view('contact');
});

// -------------------- /posts Routes --------------------

// List all posts
Route::get('/posts', function () {
    $posts = Post::with('user', 'tags')->get();
    return view('posts', [
        'posts' => $posts
    ]);
});

// Show single post
Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);

    return view('post', ['post' => $post]);
});