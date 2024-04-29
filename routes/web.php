<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\BulkPrintController;
use App\Http\Controllers\RoomExchangeController;
use App\Http\Controllers\PrintServicesController;

// Welcome page route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Redirect login route to admin login
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

// Service page route
Route::get('/service', function () {
    return view('/service');
});

// Office page route
Route::get('/office', function () {
    return view('/office');
});

// Test page route
Route::get('/test', function () {
    return view('/test');
});

// Download PDF routes for offices
Route::get('/offices/download', [PDFController::class,'downloadpdf'])->name('download.offices');
Route::get('/offices/download/{id}', [PDFController::class,'downloadoffice'])->name('download.office');

// Download PDF routes for services
Route::get('/services/download', [PrintServicesController::class,'downloadpdf'])->name('download.services');
Route::get('/services/download/{id}', [PrintServicesController::class,'downloadservice'])->name('download.service');

// Room exchange page route
Route::get('/offices/swap', [RoomExchangeController::class, 'showRooms'])->name('swap.offices');

// AJAX route to save office location data
Route::post('/office/save-location', [RoomExchangeController::class, 'saveLocation'])->name('office.save-location');







