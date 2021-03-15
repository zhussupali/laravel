<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogContronller;
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
    $post = Post::find(2);
    return $post;
});

Route::get('/blog/index', [BlogContronller::class, 'index']);


Route::get('/blog/create', function(){
    return view('blog.create');
});

Route::post('/blog/create', [BlogContronller::class, 'store'])->name('add-blog');


Route::get('/post/{id}', [BlogContronller::class, 'get_post']);