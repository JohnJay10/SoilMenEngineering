<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\CalibrationOfEquipmentController;
use App\Http\Controllers\DutchConePenetrationController;
use App\Http\Controllers\LabTestServiceController;
use App\Http\Controllers\PavementEvaluationTestController;
use App\Http\Controllers\QualityControlController;
use App\Http\Controllers\Standard_Penetration_TestController;
use App\Http\Controllers\StructuralIntegrityTestController;

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
//  require 'admin.php';

Route::resource('Standard-Penetration-Test', Standard_Penetration_TestController::class);
Route::get('/Standard-Penetration-Test/paginate', [App\Http\Controllers\Standard_Penetration_TestController::class, 'paginate']);

Route::resource('Calibration-Of-Equipment', CalibrationOfEquipmentController::class);
Route::get('/Calibration-Of-Equipment/paginate', [App\Http\Controllers\CalibrationOfEquipmentController::class, 'paginate']);

Route::resource('Dutch-Cone-Penetration', DutchConePenetrationController::class);
Route::get('/Dutch-Cone-Penetration/paginate', [App\Http\Controllers\DutchConePenetrationController::class, 'paginate']);


Route::resource('Lab-Test-Services', LabTestServiceController::class);
Route::get('/Lab-Test-Services/paginate', [App\Http\Controllers\LabTestServiceController::class, 'paginate']);

Route::resource('Pavement-Evaluation-Test', PavementEvaluationTestController::class);
Route::get('/Pavement-Evaluation-Test/paginate', [App\Http\Controllers\PavementEvaluationTestController::class, 'paginate']);

Route::resource('Quality-Control', QualityControlController::class);
Route::get('/Quality-Control/paginate', [App\Http\Controllers\QualityControlController::class, 'paginate']);

Route::resource('Structural-Integrity-Test', StructuralIntegrityTestController::class);
Route::get('/Structural-Integrity-Test/paginate', [App\Http\Controllers\StructuralIntegrityTestController::class, 'paginate']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
