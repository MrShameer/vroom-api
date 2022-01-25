<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LocationController extends Controller
{
    public function setlocation(Request $request){
        $location = location::updateOrCreate([
            'lessor' => $request->user()->id,
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'address' => $request['address'],
            ]);
            return response()->json(['Sucessfully Saved'], 200);
    }

    public function getlocation(Request $request){
        $location = location::where('lessor', $request->user()->id)->first();
        return Response::json($location, 200);
    }
}
