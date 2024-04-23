<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\BulkPrintController;
use App\Http\Controllers\PrintServicesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Route::get('/service', function () {
    return view('/service');
});

Route::get('/office', function () {
    return view('/office');
});

// Route::get('/service/download', function () {
//     return 'test';
// })->name ('download.services');

Route::get('/offices/download',[PDFController::class,'downloadpdf'])->name('download.offices');
Route::get('/offices/download/{id}',[PDFController::class,'downloadoffice'])->name('download.office');

Route::get('/services/download',[PrintServicesController::class,'downloadpdf'])->name('download.services');
Route::get('/services/download/{id}',[PrintServicesController::class,'downloadservice'])->name('download.service');



