<?php

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
    return view('welcome',[
        'title' => ["Beatless","Guilty Crown","Sakurasou no Pet no Kanojo@"],
        'path' => [
            "images/img.jpg",
            "images/img2.jpg",
            "images/img3.png"
        ]
    ]);
});

Route::get('/login', function () {
    return view('login');
});
