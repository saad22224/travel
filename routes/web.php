<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index7');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/recruitment', function () {
    return view('recruitment.index');
})->name('recruitment');

// /recruitment_Services
Route::get('/recruitment_Services', function () {
    return view('recruitment.services');
})->name('recruitment_Services');


// Travel and Tourism

Route::get('/travel', function () {
    return view('recruitment.travel');
})->name('travel');