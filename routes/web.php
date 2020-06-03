<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@hello');
/*
Route::get('/hi/{username}', function ($username) {
    return view('hi ').$username;
});*/

Route::get('/FirstPage', function () {
    return view('first_page');
});

Route::get('/SecondPage', function () {
    return view('second_page');
});