<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/pcard', function () {
    return view('pcard');
});
Route::get('/amir', function () {
    return view('amir');
});
