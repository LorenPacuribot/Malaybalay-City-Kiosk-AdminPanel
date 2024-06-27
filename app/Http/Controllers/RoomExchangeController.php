<?php

namespace App\Http\Controllers;



use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\OfficeLocationPivot;

class RoomExchangeController extends Controller
{

    public function showRooms()
    {
        // Fetch all offices
        $offices = OfficeLocationPivot::all();

        // Pass the office data to the blade file
        return view('swapcopy', [
            'offices' => $offices
        ]);
    }




}
