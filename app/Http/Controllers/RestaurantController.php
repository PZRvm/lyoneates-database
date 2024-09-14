<?php

namespace App\Http\Controllers;

use App\Services\DistanceService;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function testDistance(Request $request)
    {
        $request->validate([
            "latitude1" => "required|numeric",
            "longitude1" => "required|numeric",
            "latitude2" => "required|numeric",
            "longitude2" => "required|numeric",
        ]);
        return DistanceService::getDistanceFromLatLonInKm($request['latitude1'],$request['longitude1'],$request['latitude2'],$request['longitude2']);
    }
}
