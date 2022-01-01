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
     
        $allowedfileExtension=['jpg','png'];
        $files = $request->file('image'); 
        $errors = [];
     
        foreach ($files as $file) {      
     
            $extension = $file->getClientOriginalExtension();
     
            $check = in_array($extension,$allowedfileExtension);
     
            if($check) {
                foreach($request->image as $mediaFiles) {
     
                    $path = $mediaFiles->store('public/images');
                    $name = $mediaFiles->user()->id;
          
                    //store image file into directory and db
                    $save = new Image();
                    $save->title = $name;
                    $save->path = $path;
                    $save->save();
                }
            } else {
                return response()->json(['invalid_file_format'], 422);
            }
     
            return response()->json(['file_uploaded'], 200);
        }
    }

    public function getImage(Request $request){
       return asset('storage/picture/profile/'.$request->user()->id.'.png');
    }

    public function updateinfo(Request $request){
        $user = User::where('id', $request->user()->id)->update([$request['column'] => $request['data']]);
        return Response::json($user, 200);
    }
   
}
