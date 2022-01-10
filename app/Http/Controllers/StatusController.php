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
            'total' => $request['total'],
            'payment_type' => $request['payment_type'],
            'payment' => $request['payment'],
            'pickup' => $request['pickup'],
            'return' => $request['return'],
            'location' => $request['location'],
            'progress'=> $request['progress'],
            ]);

        }catch(QueryException $exception){
            return response()->json(['message' => 'Already Booked'], 401);
        }
        
        return response()->json(['message' => 'Sucessfully Booked'], 200);
    }

    public function lessorrequest(Request $request){
        $id = Vehicle::where('owner',  $request->user()->id)->get('plat');
        $status = Status::whereIn('plat', $id)->where('status',$request['status'])->with('lessee:id,name','vehicle')->get();
        return Response::json($status, 200);
    }
}
