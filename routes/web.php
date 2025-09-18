<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// -------------------- Home Page --------------------
// Route::get('/', function () {
//     return view('home');
// });

// These are the same, it is just a short hand
// Tips #3 from the laravel tutorial Day 19
Route::view('/', 'home');

// -------------------- /jobs Routes --------------------

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class);

// -------------------- /contact Route --------------------
Route::view('/contact', 'contact');

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