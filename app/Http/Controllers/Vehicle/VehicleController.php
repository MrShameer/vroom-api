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

    public function vehiclelist(Request $request){
        if($request->type == 'all'){
            $vehicle = Vehicle::where('list', true)->with('owner:id,name')->paginate(4);
        }
        else{
            $vehicle = Vehicle::where('list', true)->where('type', '=', $request->type)->with('owner:id,name')->paginate(4);
        }
        return Response::json($vehicle, 200);
    }

    public function insert(Request $request){
        $vehicle = Vehicle::create([
            'owner' => $request->user()->id,
            'plat' => $request['plat'],
            'type' => $request['type'],
            'brand' => $request['brand'],
            'model' => $request['model'],
            'insurance' => $request['insurance'],
            'age' => $request['age'],
            'passenger' => $request['passenger'],
            'door' => $request['door'],
            'luggage' => $request['luggage'],
            'gallon' => $request['gallon'],
            'rent' => $request['rent'],
            ]);

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }
        $check = in_array($file->getClientOriginalExtension(),['jpg','png']);
        if(!$check) {
            return response()->json(['invalid_file_extension'], 400);
        }
        $path = public_path() . '/storage/picture/vehicle';
        $file->move($path, $file->getClientOriginalName());
        return response()->json(['success'], 200);
        
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

    public function lessorlist(Request $request){
        $vehicle = Vehicle::where('owner', $request->user()->id)->where('list',  $request->boolean('list'))->get();
        return Response::json($vehicle, 200);
    }
}
