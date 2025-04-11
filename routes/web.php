<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return 'Welcome Anas to Laravel with the distinguished teacher Ahmed Zaqout ';
});
Route::get('/home',function(){
   return view('home');
});