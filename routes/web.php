<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\BulkPrintController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

// Route::get('/print', function () {
//     return view('print');
// });

Route::get('generate-pdf', [PdfController::class, 'generatePdf'])->name('generate-pdf');

Route::match(['get', 'post'], '/bulk-print', [BulkPrintController::class, 'print'])->name('bulk.print');
