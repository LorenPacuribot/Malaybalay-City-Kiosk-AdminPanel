<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    // public function __invoke(Office $order)
    // {
    //     return Pdf::loadView('pdf', ['record' => $order])
    //         ->download($order->number. '.pdf');
    // }
    public function generatePdf ()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }

}
