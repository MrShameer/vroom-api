<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Status;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;

use App\Models\Vehicle;

class StatusController extends Controller
{
    public function list(Request $request){
       $status = Status::where('lessee', $request->user()->id)->with('vehicle:owner,plat,model,brand','vehicle.owner:id,name')->get()->groupBy('status');
        return Response::json($status, 200);
    }

    public function send(Request $request){
        try{
            $status = Status::create([
            'lessee' => $request->user()->id,
            'plat' => $request['plat'],
            'status' => 'pending',
            ]);

        }catch(QueryException $exception){
            return response()->json(['message' => 'Already Booked'], 401);
        }

        return response()->json(['message' => 'Sucessfully Booked'], 200);
    }
}
