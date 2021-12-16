<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Status;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Models\Vehicle;

class StatusController extends Controller
{
    public function list(Request $request){
       $status = Status::where('lessee', $request->user()->id)->with('vehicle:owner,plat,model,brand','vehicle.owner:id,name')->get()->groupBy('status');
        return Response::json($status, 200);

        // return response()->json([
        //     'data' => $status,
        //     'picture' => json_decode('storage/picture/profile/'.$request->user()->id.'.png')
        //     // file('storage/picture/profile/'.$request->user()->id.'.png'),
        // ]);
    }
}
