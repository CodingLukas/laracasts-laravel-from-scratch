<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','PagesController@home');
//Route::get('/',function(App\Example $example){
////   $example = resolve(App\Example::class);
//
//   ddd($example);
//});

//Route::get('/', function (){
//
//   $container = new \App\Container();
//
//   $container->bind('example', function(){
//       return new \App\Example();
//    });
//
//   $example = $container->resolve('example');
//
//   ddd($example);
//
//});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('test', function () {
    $name = request('name');
    return view('test', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

//Route::get('/contact', function () {
//    return view('contact');
//});

Route::get('/welcome', function () {
    return view('video15.welcome');
});

Route::get('/about', function () {
    return view('video15.about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});
Route::get('/articles/', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{articles}/edit', 'ArticlesController@edit');
Route::put('/articles/{articles}', 'ArticlesController@update');

// GET /videos
// GET /videos/create
// POST /videos
// GET /videos/2
// Get /videos/2/edit
// PUT /videos/2
// DELETE /videos/2

// POST /videos/subcriptions => VideoSubcriptionController@store


Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');
