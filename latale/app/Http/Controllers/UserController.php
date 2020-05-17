<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $age = 20;
        $name = '这是';
        $html = '<a href="http://baidu.com">百度一下</a>';
        $data = ['age'=>$age,'name'=>$name];
//        return view('user.index',compact('name','age'));
        return view('user.index',compact('data','html'));
    }
}
