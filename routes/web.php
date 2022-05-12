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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/header',function(){
    return view('layout.header');
});

Route::get('/layout',function(){
    return view('layout.layaouts');
});

Route::get('/kehilangan', function(){
    return view('kehilangan');
});

Route::get('/menemukan',function(){
    return view('menemukan');
});

Route::get('/forum01',function(){
    return view('fkehilangan');
});

Route::get('/forum02',function(){
    return view('fmenemukan');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/home', function(){
    return view('home');
});