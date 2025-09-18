<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with(['employer', 'tags'])->simplePaginate(3);
    // $jobs = Job::all();

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    $posts = Post::with('user', 'tags')->get();
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);

    return view('post', ['post' => $post]);
});