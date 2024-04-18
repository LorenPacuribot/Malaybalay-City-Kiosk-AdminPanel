<?php

namespace App\Filament\Actions;

use Barryvdh\DomPDF\Facade as PDF;
use Filament\Tables\Actions\BulkAction;

class BulkPrintAction extends BulkAction
{
    public function handle($records)
    {
        // Check if records are empty
        if (empty($records)) {
            // You might want to handle this case according to your application logic
            return redirect()->back()->with('error', 'No records selected.');
        }

        // Generate PDF for selected offices
        $pdf = PDF::loadView('bulk-print', ['offices' => $records]);

        // Download or display the PDF
        return $pdf->download('offices.pdf');
    }
}
