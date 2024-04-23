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
        return $pdf->stream('MALAYBALAY CITY OFFICES.pdf');
    }

    public function downloadoffice($id)
{
    $office = Office::find($id);

    if (!$office) {
        return response()->json(['message' => 'Office not found'], 404);
    }

    $data = [
        'date' => date('m/d/Y'),
        'office' => $office, // Pass the single office instead of all offices
    ];

    $pdf = PDF::loadView('o1', $data);
    return $pdf->stream('office_' . $id . '.pdf');
}



}
