<?php

namespace App\Http\Controllers\Vehicle;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\Wishlist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;

class VehicleController extends Controller
{
    //
    public function carlist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'car')->paginate(4);
        //$vehicle = Vehicle::paginate(4);
        return Response::json($vehicle, 200);
    }

    public function bikelist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'bike')->paginate(4);
        return Response::json($vehicle, 200);
    }

    public function bicyclelist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'bicycle')->paginate(4);
        return Response::json($vehicle, 200);
    }

    public function vanlist(Request $request){
        $vehicle = Vehicle::where('type', '=', 'van')->paginate(4);
        return Response::json($vehicle, 200);
    }

    public function insert(Request $request){
        
    }

    public function wishlist(Request $request){
        $wishlist = Wishlist::where('user', '=', $request->user()->id)->with('vehicle.owner:id,name')->get('plat');
        return Response::json($wishlist, 200);
    }

    public function insertWishlist(Request $request){
        try{
            $wishlist = Wishlist::create([
            'user' => $request->user()->id,
            'plat' => $request['plat'],
            ]);

        }catch(QueryException $exception){
            return response()->json(['message' => 'Wishlist Already Exists'], 401);
        }

        return response()->json(['message' => 'Wishlist Inserted'], 200);
    }
}
