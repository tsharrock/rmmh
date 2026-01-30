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


//Route::get('/areas-served/salt-lake-city', function () {
//    return view('areas-served/salt-lake-city');
//});

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::view('/cache-valley', 'cache-valley')->name('cache-valley');
Route::view('/telehealth/salt-lake-city', 'telehealth.salt-lake-city')->name('telehealth.salt-lake-city');
Route::view('/telehealth/ogden', 'telehealth.ogden')->name('telehealth.ogden');
Route::view('/telehealth/provo', 'telehealth.provo')->name('telehealth.provo');
Route::view('/telehealth/st-george', 'telehealth.st-george')->name('telehealth.st-george');
Route::view('/telehealth/cedar-city', 'telehealth.cedar-city')->name('telehealth.cedar-city');