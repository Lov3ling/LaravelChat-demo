<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChatRequest;
use Illuminate\Support\Facades\Redis;


class ChatController extends Controller
{
    //
    public function Index(Request $request){

        return view('chat.chat');
    }

    public function NewMessage(ChatRequest $request){
        $user=Auth::user()->name;               /* 用户名 */
        $avatar=Auth::user()->avatar;            /* 头像 */

        $date=date('Y-m-d:H:i:s');      /* 时间 */
        $data=[
            "msg"=>$request->msg,               /* 消息 */
            "date"=>$date,                      /* 时间 */
            "avatar"=>$avatar,                  /* 头像 */
            "user"=>Auth::user()->name,         /* 用户名 */
        ];
        Redis::publish('chat-channel',json_encode($data));      /* 发布消息至chat频道 */
        /* redirect to Socket.js */
        return $request->msg;
    }
}
