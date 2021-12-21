<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Chatrooms;
use App\Models\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use App\Http\Resources\UserOneResource;
use App\Http\Resources\UserTwoResource;

class ChatController extends Controller
{
    public function send(Request $request){
        $fcm = User::where('id',$request['to'])->pluck('fcm')->first();
        $response = Http::withHeaders([
           // 'Authorization' => $this->authorization, //$_ENV['FSM_KEY']
           'Authorization' => config('services.firebase.key'),
            'Content-Type' => 'application/json',
            ])->post(config('services.firebase.url'), [
                'to' => $fcm,
                'data' => [
                    'title' => $request->user()->name,
                    'body' => $request['message'],
                ],
            ]);
            $message = Message::create([
                'chatroom' => $request['chatid'],
                'sender' => $request['to'],
                'message' => $request['message'],
    
            ]);
        return $response;
    }
    public function list(Request $request){//wait haven't clean the code yet
        $id=$request->user()->id;
        $user_one = Chatrooms::where('user_two', $id)->with('user_one:id,name,email,phone','message')->get(['id','user_one']);
        $user_one = UserOneResource::collection($user_one);
        $list = Chatrooms::where('user_one', $id)->with('user_two:id,name,email,phone','message')->get(['id','user_two']);
        $list = UserTwoResource::collection($list)->merge($user_one);
        return Response::json($list, 200);
    }

    public function messages(Request $request){ 
        $message = Message::where('chatroom', $request->id)->get(['id','sender','message','created_at']);
        return Response::json($message, 200);
    }
}
