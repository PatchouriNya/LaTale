<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }

    public function confirm(Request $request){
        $username = $request->get('username') ?? '';
        $password = $request->get('password') ?? '';
        if($username == '' || $password == ''){
            return [
                'code' => 300,
                'msg'  => '请正确填写信息'
            ];
        }
        if($username == 'admin' && $password == 'admin'){
            return [
                'code' => 200,
                'msg'  => '登陆成功'
            ];
        }else{
            return [
                'code' => 100,
                'msg'  => '账号或密码错误'
            ];
        }

    }


}
