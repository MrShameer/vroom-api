<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;

class RatingController extends Controller
{
    //
    public function ratinglist(Request $request){
        $rating = Rating::where('plat', $request['plat'])->with('owner:id,name')->get();
        return Response::json($rating, 200);
    }
}
