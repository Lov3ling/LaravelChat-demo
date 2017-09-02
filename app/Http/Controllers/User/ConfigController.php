<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\File;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;

class ConfigController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request){
        return view('user.config')->with(['user'=>\Auth::user()]);
    }

    /**
     * @param Request $request
     */
    public function AvatarUpload(Request $request){         //头像上传
        $file=$request->file('files');
        $filename="/Aris/avatar/".md5(time()).".".$file->getClientOriginalExtension();      //重命名文件
        $user=\Auth::user();



        /* 七牛云上传 */
        Storage::disk('qiniu')->writeStream($filename,fopen($file->getRealPath(),'r')); //写入到七牛云
        $newfilename="http://".config('filesystems.disks.qiniu.domain')."/".$filename;              //返回文件外链
        $user->avatar=$newfilename;
        $user->save();
        return $newfilename;


        /* 本地服务器上传 */
        //$newfile=$file->move(public_path('/upload/avatars'),$filename); //移动到指定文件夹
        //return asset('/upload/avatars/'.$newfile->getFilename());   //返回新文件地址
    }

    public function UpdateInfo(Request $request){
        if($request->_token){
            $name=$request->name??Auth::user()->name;
            $phone=$request->phone??Auth::user()->phone;
            $user=User::find(Auth::id());
            $user->name=$name;
            $user->phone=$phone;
            $user->save();
            return "Update Success !";
        }
        return "Update Failed !";
    }
}
