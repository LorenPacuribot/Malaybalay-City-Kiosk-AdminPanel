<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Service;
use App\Models\DocumentaryRequirement;
use App\Models\AgencyAction;
use App\Models\ClientAction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class PrintServicesController extends Controller
{
    public function downloadpdf()
    {
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);


        // Retrieve the first office
        $office = Office::all();

        // Retrieve all services
       // $services = Service::all();
        $service = Service::with('documentaryRequirements', 'clientActions.agencyActions')->get();



        // Prepare data to pass to the view
        $data = [
            'date' => date('m/d/Y'),
            'office' => $office,
            'services' => $service,

        ];

        // Load the PDF view with the provided data
        $pdf = PDF::loadView('service', $data);

        // Set paper size and orientation
        $pdf->setPaper('Legal', 'landscape');

        // Return the PDF as a stream
        return $pdf->stream('MALAYBALAY CITY CITIZEN’S CHARTER.pdf');
    }

    public function downloadservice($id)
    {
        // Retrieve the service with the specific ID along with its related data
        $service = Service::with('office', 'documentaryRequirements', 'clientActions.agencyActions')->findOrFail($id);

        // Prepare data to pass to the view
        $data = [
            'date' => date('m/d/Y'),
            'service' => $service, // Pass the single service object
        ];

        // Load the PDF view with the provided data
        $pdf = PDF::loadView('specificService', $data);

        // Set paper size and orientation
        $pdf->setPaper('Legal', 'landscape');

        // Return the PDF as a stream
        return $pdf->stream('MALAYBALAY CITY CITIZEN’S CHARTER.pdf');
    }



}
