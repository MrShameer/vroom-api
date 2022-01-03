<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request){
        $user = Auth::user();
        return ($user);
    }

    public function uploadImage(Request $request){
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
        $path = public_path() . '/storage/picture/'. $request['path'];
        $file->move($path, $file->getClientOriginalName());
        if($request['path'] == 'identification'){
            $user = User::where('id', $request->user()->id)->update(['icverified' => 'review']);
        }
        elseif($request['path'] == 'license'){
            $user = User::where('id', $request->user()->id)->update(['dlverified' => 'review']);
        }
        return response()->json(['success'], 200);
    }

    public function getImage(Request $request){
       return asset('storage/picture/profile/'.$request->user()->id.'.png');
    }

    public function updateinfo(Request $request){
        $user = User::where('id', $request->user()->id)->update([$request['column'] => $request['data']]);
        return Response::json($user, 200);
    }
}
