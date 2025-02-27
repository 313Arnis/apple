<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/airpods', function () {
    return view('airpods');
});
Route::get('/imac', function () {
    return view('imac');
});
Route::get('/iphone', function () {
    return view('iphone');
});
Route::get('/macbooks', function () {
    return view('macbooks');
});
Route::get('/watch', function () {
    return view('watch');
});
Route::get('/store', function () {
    return view('store');
});
