<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function downloadpdf(){

        $offices = Office::all();
        $office = Office::find(1);
        $locationName = $office->location_name;


        $data = [
            'date' => date('m/d/Y'),
            'offices' => $offices,
        ];

        $pdf = PDF::loadView('office', $data);

        $pdf->setPaper('Legal', 'landscape');
        return $pdf->stream('office.pdf');
    }


}
