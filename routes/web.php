<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/test',function(Request $request){
    /*$data=["name"=>"Lee","data"=>[
        "date"=>date('Y-m-d:H:i:s',time())
    ]];*/


    /*
     *  Redis publish方法将$data发布至test频道
     */
    return view('Chat.chat');
});

/*
Route::get('/run',function(){
    $user=Auth::user()->name;               // 用户名
    $avatar=Auth::user()->avatar;            //头像

    $date=date('Y-m-d:H:i:s');      // 时间
    $data=[
        "msg"=>"My name is".$user,
        "date"=>$date,
        "avatar"=>$avatar,
        "user"=>Auth::user()->name,
    ];
    Redis::publish('test-channel',json_encode($data));      // 发布订阅
});
*/
Route::get('/run',function(){
});



Route::get('/chat','ChatController@Index');             /* 聊天室界面 */
Route::post('/chat/post','ChatController@NewMessage');  /* 发送消息 */


Route::get('/', function () {
    return view('show.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/email/auth/code/{token}','Auth\EmailAuthController@AuthCode');
Route::get('/user/info','User\ConfigController@Index');
Route::post('/user/update/info','User\ConfigController@UpdateInfo');

Route::post('/user/avatar/upload','User\ConfigController@AvatarUpload');
