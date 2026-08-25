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

// Utah telehealth city pages — Tier 1-3 rural/regional expansion
Route::view('/telehealth/utah/richfield', 'telehealth.utah.richfield')->name('telehealth.utah.richfield');
Route::view('/telehealth/utah/roosevelt', 'telehealth.utah.roosevelt')->name('telehealth.utah.roosevelt');
Route::view('/telehealth/utah/nephi', 'telehealth.utah.nephi')->name('telehealth.utah.nephi');
Route::view('/telehealth/utah/delta', 'telehealth.utah.delta')->name('telehealth.utah.delta');
Route::view('/telehealth/utah/kanab', 'telehealth.utah.kanab')->name('telehealth.utah.kanab');
Route::view('/telehealth/utah/monticello', 'telehealth.utah.monticello')->name('telehealth.utah.monticello');
Route::view('/telehealth/utah/ephraim', 'telehealth.utah.ephraim')->name('telehealth.utah.ephraim');
Route::view('/telehealth/utah/tremonton', 'telehealth.utah.tremonton')->name('telehealth.utah.tremonton');
Route::view('/telehealth/utah/tooele', 'telehealth.utah.tooele')->name('telehealth.utah.tooele');
Route::view('/telehealth/utah/brigham-city', 'telehealth.utah.brigham-city')->name('telehealth.utah.brigham-city');
Route::view('/telehealth/utah/fillmore', 'telehealth.utah.fillmore')->name('telehealth.utah.fillmore');
Route::view('/telehealth/utah/panguitch', 'telehealth.utah.panguitch')->name('telehealth.utah.panguitch');
Route::view('/telehealth/utah/gunnison', 'telehealth.utah.gunnison')->name('telehealth.utah.gunnison');
Route::view('/telehealth/utah/mount-pleasant', 'telehealth.utah.mount-pleasant')->name('telehealth.utah.mount-pleasant');
Route::view('/telehealth/utah/green-river', 'telehealth.utah.green-river')->name('telehealth.utah.green-river');
Route::view('/telehealth/utah/castle-dale', 'telehealth.utah.castle-dale')->name('telehealth.utah.castle-dale');
Route::view('/telehealth/utah/duchesne', 'telehealth.utah.duchesne')->name('telehealth.utah.duchesne');
Route::view('/telehealth/utah/milford', 'telehealth.utah.milford')->name('telehealth.utah.milford');
Route::view('/telehealth/utah/hurricane', 'telehealth.utah.hurricane')->name('telehealth.utah.hurricane');
Route::view('/telehealth/utah/escalante', 'telehealth.utah.escalante')->name('telehealth.utah.escalante');
Route::view('/telehealth/utah/loa', 'telehealth.utah.loa')->name('telehealth.utah.loa');
Route::view('/telehealth/utah/garden-city', 'telehealth.utah.garden-city')->name('telehealth.utah.garden-city');
Route::view('/telehealth/utah/roy', 'telehealth.utah.roy')->name('telehealth.utah.roy');
Route::view('/telehealth/utah/american-fork', 'telehealth.utah.american-fork')->name('telehealth.utah.american-fork');
Route::view('/telehealth/utah/murray', 'telehealth.utah.murray')->name('telehealth.utah.murray');
Route::view('/telehealth/utah/west-valley-city', 'telehealth.utah.west-valley-city')->name('telehealth.utah.west-valley-city');
Route::view('/telehealth/utah/coalville', 'telehealth.utah.coalville')->name('telehealth.utah.coalville');
Route::view('/telehealth/utah/bluff', 'telehealth.utah.bluff')->name('telehealth.utah.bluff');
Route::view('/telehealth/utah/hanksville', 'telehealth.utah.hanksville')->name('telehealth.utah.hanksville');
Route::view('/telehealth/utah/parowan', 'telehealth.utah.parowan')->name('telehealth.utah.parowan');
Route::view('/telehealth/utah/morgan', 'telehealth.utah.morgan')->name('telehealth.utah.morgan');

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

// Montana telehealth city pages
Route::view('/telehealth/montana/billings', 'telehealth.montana.billings')->name('telehealth.montana.billings');
Route::view('/telehealth/montana/missoula', 'telehealth.montana.missoula')->name('telehealth.montana.missoula');
Route::view('/telehealth/montana/great-falls', 'telehealth.montana.great-falls')->name('telehealth.montana.great-falls');
Route::view('/telehealth/montana/bozeman', 'telehealth.montana.bozeman')->name('telehealth.montana.bozeman');
Route::view('/telehealth/montana/butte', 'telehealth.montana.butte')->name('telehealth.montana.butte');
Route::view('/telehealth/montana/helena', 'telehealth.montana.helena')->name('telehealth.montana.helena');
Route::view('/telehealth/montana/kalispell', 'telehealth.montana.kalispell')->name('telehealth.montana.kalispell');
Route::view('/telehealth/montana/havre', 'telehealth.montana.havre')->name('telehealth.montana.havre');
Route::view('/telehealth/montana/miles-city', 'telehealth.montana.miles-city')->name('telehealth.montana.miles-city');
Route::view('/telehealth/montana/glendive', 'telehealth.montana.glendive')->name('telehealth.montana.glendive');
Route::view('/telehealth/montana/lewistown', 'telehealth.montana.lewistown')->name('telehealth.montana.lewistown');
Route::view('/telehealth/montana/dillon', 'telehealth.montana.dillon')->name('telehealth.montana.dillon');
Route::view('/telehealth/montana/hamilton', 'telehealth.montana.hamilton')->name('telehealth.montana.hamilton');
Route::view('/telehealth/montana/polson', 'telehealth.montana.polson')->name('telehealth.montana.polson');
Route::view('/telehealth/montana/sidney', 'telehealth.montana.sidney')->name('telehealth.montana.sidney');

// Iowa telehealth city pages
Route::view('/telehealth/iowa/des-moines', 'telehealth.iowa.des-moines')->name('telehealth.iowa.des-moines');
Route::view('/telehealth/iowa/cedar-rapids', 'telehealth.iowa.cedar-rapids')->name('telehealth.iowa.cedar-rapids');
Route::view('/telehealth/iowa/davenport', 'telehealth.iowa.davenport')->name('telehealth.iowa.davenport');
Route::view('/telehealth/iowa/sioux-city', 'telehealth.iowa.sioux-city')->name('telehealth.iowa.sioux-city');
Route::view('/telehealth/iowa/iowa-city', 'telehealth.iowa.iowa-city')->name('telehealth.iowa.iowa-city');
Route::view('/telehealth/iowa/waterloo', 'telehealth.iowa.waterloo')->name('telehealth.iowa.waterloo');
Route::view('/telehealth/iowa/ames', 'telehealth.iowa.ames')->name('telehealth.iowa.ames');
Route::view('/telehealth/iowa/council-bluffs', 'telehealth.iowa.council-bluffs')->name('telehealth.iowa.council-bluffs');
Route::view('/telehealth/iowa/dubuque', 'telehealth.iowa.dubuque')->name('telehealth.iowa.dubuque');
Route::view('/telehealth/iowa/mason-city', 'telehealth.iowa.mason-city')->name('telehealth.iowa.mason-city');
Route::view('/telehealth/iowa/fort-dodge', 'telehealth.iowa.fort-dodge')->name('telehealth.iowa.fort-dodge');
Route::view('/telehealth/iowa/marshalltown', 'telehealth.iowa.marshalltown')->name('telehealth.iowa.marshalltown');
Route::view('/telehealth/iowa/ottumwa', 'telehealth.iowa.ottumwa')->name('telehealth.iowa.ottumwa');
Route::view('/telehealth/iowa/burlington', 'telehealth.iowa.burlington')->name('telehealth.iowa.burlington');
Route::view('/telehealth/iowa/carroll', 'telehealth.iowa.carroll')->name('telehealth.iowa.carroll');
