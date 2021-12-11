<?php

namespace App\Http\Controllers\Vehicle;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class VehicleController extends Controller
{
    //
    public function carlist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'car')->paginate(10);
        //$vehicle = Vehicle::where('type', '=', 'car');
        return Response::json($vehicle, 200);
    }

    public function bikelist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'bike')->paginate(10);
        //$vehicle = Vehicle::where('type', '=', 'car');
        return Response::json($vehicle, 200);
    }

    public function bicyclelist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'bicycle')->paginate(10);
        //$vehicle = Vehicle::where('type', '=', 'car');
        return Response::json($vehicle, 200);
    }

    public function vanlist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'van')->paginate(10);
        //$vehicle = Vehicle::where('type', '=', 'car');
        return Response::json($vehicle, 200);
    }

    public function insert(Request $request){
        
    }
}
