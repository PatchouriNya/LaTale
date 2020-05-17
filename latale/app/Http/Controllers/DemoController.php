<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function req(Request $request){
//        dump($request->header());
//        dump($request->server());
        dump($request->capture());
    }
}
