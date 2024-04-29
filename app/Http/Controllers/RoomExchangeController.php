<?php

namespace App\Http\Controllers;


use App\Models\Office;
use Illuminate\Http\Request;
use App\Models\OfficeLocationPivot;

class RoomExchangeController extends Controller
{


    public function showRooms(Request $request)
    {
        // Fetch all offices
        $offices = OfficeLocationPivot::all();

        // Pass the office data to the blade file
        return view('swap', [
            'offices' => $offices
        ]);
    }

}
