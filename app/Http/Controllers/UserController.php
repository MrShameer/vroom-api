<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // public function info(Request $request){
    //     $info = User::where('type', '=', 'bike')->paginate(15);
    //     //$vehicle = Vehicle::where('type', '=', 'car');
    //     return Response::json($vehicle, 200);
    // }

    public function info(Request $request){
        $user = Auth::user();
        return ($user);
    }
   
}
