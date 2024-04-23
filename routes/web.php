<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\BulkPrintController;


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

Route::get('/download',[PDFController::class,'downloadpdf'])->name('download.offices');



