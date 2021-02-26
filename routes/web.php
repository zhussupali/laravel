<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title' => 'The Title of the Post',
        'body' => 'The long Body of the Post with Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
    ]);  
});

Route::get('/post', function () {
    $post = Post::find(1);
    return $post->title;
});