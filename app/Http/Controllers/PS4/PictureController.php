<?php

namespace PS4WallPaper\Http\Controllers\PS4;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class PictureController extends BaseController
{
    public function show()
    {
        $code = Input::get('code');
        if(strlen($code)!=6){
            return view('error', ['msg' => '提取码格式错误']);
        }
        $code = strtolower($code);
        //查询数据库，并保证不过期
        $dbArr = DB::table('picture')->where('id',$code)->first();
        if(empty($dbArr)||(time()-strtotime($dbArr->ctime)>3600*24)){
            return view('error', ['msg' => '提取码不存在或已过期']);
        }
        return view('showPicture', ['path'=>$dbArr->path]);
    }

    public function upload(){
        $file = Input::file('file');
        if($file -> isValid()){
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $filename =  uniqid() . '.' . $ext;
            $bool = file_put_contents('uploads/'.$filename, file_get_contents($realPath));
            $id=substr(uniqid(),7,6);
            if($bool){
                DB::insert('insert into picture(id,path,orgin_name,ip) values (?,?,?,?)',[$id, $filename, $originalName, ip2long($_SERVER['REMOTE_ADDR'])]);
            }
            return view('success', ['code' => $id]);
        }else{
            echo 2;
        }

    }
}
