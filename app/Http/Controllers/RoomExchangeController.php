<?php

namespace App\Http\Controllers;


use Log;
use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
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


        public function saveLocation(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'office_id' => 'required|exists:offices,id',
        ]);

        // Create a new OfficeLocationPivot instance
        $pivot = new OfficeLocationPivot();
        $pivot->location_id = $request->location_id;
        $pivot->office_id = $request->office_id;
        $pivot->save();

        // Return a JSON response indicating success
        return response()->json(['message' => 'Office location saved successfully']);
    }
    

}
