<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class RoomExchangeController extends Controller
{
    // public function swap() {
    //     // return view('swap');

    // }

    public function showRooms(Request $request)
    {
        // Fetch all offices
        $offices = Office::all();

        // Pass the office data to the blade file
        return view('swap', [
            'offices' => $offices
        ]);
    }
}
