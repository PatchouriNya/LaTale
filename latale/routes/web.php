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

Route::get('/', function () {
//    return view('welcome');
      return 'qwq';
});

//Route::get('/test',function (){
//    echo 'getです';
//});
//
//Route::post('/test',function (){
//    echo 'postです';
//});
//
//Route::put('/test',function (){
//    echo 'putです';
//});
//
//Route::delete('/test',function (){
//    echo 'deleteです';
//});

//Route::any('/test',function (){
//      echo 'wwwwwwwww';
//});

//路由参数
/*Route::get('test/{id}',function ($id){
    dump($id);
})->where(['id'=>'\d+']);*/

//路由参数
/*Route::get('test/{id}',function (int $id){
    dump($id);
});*/

//可选参数
//Route::get('test/{id?}',function (int $id=0){
//    dump($id);
//});

//Route::get('a',function (){
//   return '<a href="'.route('b',['id'=>33]).'">去b</a>';
//})->name('a');
//
//Route::get('b/{id}',function (){
//    return '<a href="'.route('a').'">去a</a>';
//})->name('b');

//路由分组
//Route::group(['prefix'=>'admin'],function (){
//    Route::get('login',function (){
//        echo 'login';
//    })->name('login');
//});

/*Route::get('demo/index','DemoController@index');



Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('login','LoginController@login');
    Route::get('user/{id}','LoginController@user');
});*/

Route::any('test','DemoController@req')->name('woc');


Route::group(['prefix'=>'user'],function (){
    Route::get('index','UserController@index')->name('www');
});

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('login','LoginController@login')->name('login');
    Route::get('index','LoginController@index')->name('index');
    Route::post('confirm','LoginController@confirm')->name('confirm');
});


