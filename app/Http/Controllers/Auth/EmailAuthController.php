<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmailAuthController extends Controller
{
    //
    public function AuthCode($token){
        $user=User::where('active_code',$token)->first();
        if ($user)
        {
           $user->active=1;
           $user->active_code=str_random(40);
           $user->save();
           Auth::login($user);
           flash('验证成功')->important();
           return redirect('/home');
        }
        die();
    }
}
