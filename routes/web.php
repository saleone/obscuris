<?php

use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function (Request $req) {
    $cookie_name = 'landing_page_visited';
    $is_visited = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : false;

    // Dont show the landing page if visitor seen it already
    if ($is_visited) return redirect('/posts');

    $response = new Response(view('landing'));
    return $response->withCookie(cookie()->forever($cookie_name, true));
});

// Post routes
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/delete/{post}', 'PostsController@destroy');

// Login routes
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

// Logout routes
Route::get('/logout', 'Auth\LoginController@logout');

// Registration routes
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register');
