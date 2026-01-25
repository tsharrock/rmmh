<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/family-medicine', function () {
    return view('family-medicine');
})->name('family-medicine');

Route::get('/psychiatric-care', function () {
    return view('psychiatric-care');
})->name('psychiatric-care');

Route::get('/weight-loss', function () {
    return view('weight-loss');
})->name('weight-loss');

Route::get('/iv-fluids', function () {
    return view('iv-fluids');
})->name('iv-fluids');

Route::get('/ketamine', function () {
    return view('ketamine');
})->name('ketamine');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/insurance', function () {
    return view('insurance');
})->name('insurance');

Route::get('/telehealth', function () {
    return view('telehealth');
})->name('telehealth');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
