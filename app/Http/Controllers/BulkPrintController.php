<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class BulkPrintController extends Controller
{
    public function print(Request $request)
    {
        // Retrieve selected office IDs from the request
        $officeIds = $request->input('selected');

        // Check if any offices are selected
        if (!$officeIds) {
            return redirect()->back()->with('error', 'No offices selected.');
        }

        // Retrieve office data from the database
        $offices = Office::whereIn('id', $officeIds)->get();

        // Check if any offices were found
        if ($offices->isEmpty()) {
            return redirect()->back()->with('error', 'No offices found for the selected IDs.');
        }

        // Generate PDF for selected offices
        $pdf = PDF::loadView('bulk-print', ['offices' => $offices]);

        // Download or display the PDF
        return $pdf->download('offices.pdf');
    }
}
