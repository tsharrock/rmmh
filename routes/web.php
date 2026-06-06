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

Route::view('/logan-cache-valley', 'logan-cache-valley')->name('logan-cache-valley');

// Utah telehealth city pages
Route::view('/telehealth/utah/beaver', 'telehealth.utah.beaver')->name('telehealth.utah.beaver');
Route::view('/telehealth/utah/blanding', 'telehealth.utah.blanding')->name('telehealth.utah.blanding');
Route::view('/telehealth/utah/cedar-city', 'telehealth.utah.cedar-city')->name('telehealth.utah.cedar-city');
Route::view('/telehealth/utah/dutch-john', 'telehealth.utah.dutch-john')->name('telehealth.utah.dutch-john');
Route::view('/telehealth/utah/heber-city', 'telehealth.utah.heber-city')->name('telehealth.utah.heber-city');
Route::view('/telehealth/utah/helper', 'telehealth.utah.helper')->name('telehealth.utah.helper');
Route::view('/telehealth/utah/layton', 'telehealth.utah.layton')->name('telehealth.utah.layton');
Route::view('/telehealth/utah/moab', 'telehealth.utah.moab')->name('telehealth.utah.moab');
Route::view('/telehealth/utah/ogden', 'telehealth.utah.ogden')->name('telehealth.utah.ogden');
Route::view('/telehealth/utah/orem', 'telehealth.utah.orem')->name('telehealth.utah.orem');
Route::view('/telehealth/utah/park-city', 'telehealth.utah.park-city')->name('telehealth.utah.park-city');
Route::view('/telehealth/utah/price', 'telehealth.utah.price')->name('telehealth.utah.price');
Route::view('/telehealth/utah/provo', 'telehealth.utah.provo')->name('telehealth.utah.provo');
Route::view('/telehealth/utah/salt-lake-city', 'telehealth.utah.salt-lake-city')->name('telehealth.utah.salt-lake-city');
Route::view('/telehealth/utah/sandy', 'telehealth.utah.sandy')->name('telehealth.utah.sandy');
Route::view('/telehealth/utah/spanish-fork', 'telehealth.utah.spanish-fork')->name('telehealth.utah.spanish-fork');
Route::view('/telehealth/utah/st-george', 'telehealth.utah.st-george')->name('telehealth.utah.st-george');
Route::view('/telehealth/utah/vernal', 'telehealth.utah.vernal')->name('telehealth.utah.vernal');
Route::view('/telehealth/utah/wendover', 'telehealth.utah.wendover')->name('telehealth.utah.wendover');

// Arizona telehealth city pages
Route::view('/telehealth/arizona/apache-junction', 'telehealth.arizona.apache-junction')->name('telehealth.arizona.apache-junction');
Route::view('/telehealth/arizona/buckeye', 'telehealth.arizona.buckeye')->name('telehealth.arizona.buckeye');
Route::view('/telehealth/arizona/casa-grande', 'telehealth.arizona.casa-grande')->name('telehealth.arizona.casa-grande');
Route::view('/telehealth/arizona/flagstaff', 'telehealth.arizona.flagstaff')->name('telehealth.arizona.flagstaff');
Route::view('/telehealth/arizona/goodyear', 'telehealth.arizona.goodyear')->name('telehealth.arizona.goodyear');
Route::view('/telehealth/arizona/kingman', 'telehealth.arizona.kingman')->name('telehealth.arizona.kingman');
Route::view('/telehealth/arizona/lake-havasu-city', 'telehealth.arizona.lake-havasu-city')->name('telehealth.arizona.lake-havasu-city');
Route::view('/telehealth/arizona/maricopa', 'telehealth.arizona.maricopa')->name('telehealth.arizona.maricopa');
Route::view('/telehealth/arizona/mesa', 'telehealth.arizona.mesa')->name('telehealth.arizona.mesa');
Route::view('/telehealth/arizona/page', 'telehealth.arizona.page')->name('telehealth.arizona.page');
Route::view('/telehealth/arizona/phoenix', 'telehealth.arizona.phoenix')->name('telehealth.arizona.phoenix');
Route::view('/telehealth/arizona/prescott', 'telehealth.arizona.prescott')->name('telehealth.arizona.prescott');
Route::view('/telehealth/arizona/queen-creek', 'telehealth.arizona.queen-creek')->name('telehealth.arizona.queen-creek');
Route::view('/telehealth/arizona/san-tan-valley', 'telehealth.arizona.san-tan-valley')->name('telehealth.arizona.san-tan-valley');
Route::view('/telehealth/arizona/scottsdale', 'telehealth.arizona.scottsdale')->name('telehealth.arizona.scottsdale');
Route::view('/telehealth/arizona/sierra-vista', 'telehealth.arizona.sierra-vista')->name('telehealth.arizona.sierra-vista');
Route::view('/telehealth/arizona/surprise', 'telehealth.arizona.surprise')->name('telehealth.arizona.surprise');
Route::view('/telehealth/arizona/tempe', 'telehealth.arizona.tempe')->name('telehealth.arizona.tempe');
Route::view('/telehealth/arizona/tuba-city', 'telehealth.arizona.tuba-city')->name('telehealth.arizona.tuba-city');
Route::view('/telehealth/arizona/tucson', 'telehealth.arizona.tucson')->name('telehealth.arizona.tucson');
Route::view('/telehealth/arizona/yuma', 'telehealth.arizona.yuma')->name('telehealth.arizona.yuma');
