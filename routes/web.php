<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [FrontEndController::class, 'index'])->name('index');
route::get('/about-us', [FrontEndController::class, 'aboutus'])->name('about-us');
route::get('/services', [FrontEndController::class, 'services'])->name('services');
route::get('/contact-us', [FrontEndController::class, 'contactus'])->name('contact-us');
route::get('/quote', [FrontEndController::class, 'quote'])->name('quote');


route::get('/spt', [FrontEndController::class, 'spt'])->name('spt');
route::get('/lts', [FrontEndController::class, 'lts'])->name('lts');
route::get('/sit', [FrontEndController::class, 'sit'])->name('sit');
route::get('/coe', [FrontEndController::class, 'coe'])->name('coe');
route::get('/pet', [FrontEndController::class, 'pet'])->name('pet');
route::get('/qa', [FrontEndController::class, 'qa'])->name('qa');
route::get('/dcp', [FrontEndController::class, 'dcp'])->name('dcp');

 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
