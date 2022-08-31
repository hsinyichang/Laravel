<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


//路由頁面   ex 餐廳帶位人員
Route::get('/f1', function () {
    // $myArr=[1,2,3,4,5];
    // dd($myArr);
    return view('f1');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi', function () {
    return "<h1>hi</h1>";
});
Route::get('/hi/{name}', function ($name) {
    return "<h1>hi  ".$name."</h1>";
});
Route::get('/hi/{name}/{num}', function ($name,$num) {
    $str="<h1>hi　".$name."　num=>　".$num."</h1>";
    return $str;
});
Route::get('/math/{num1}/{num2}', function ($num1,$num2) {  
    return $num1+$num2;
});
Route::get('/f1/{name}/{age}', function (Request $request,$name,$age) {   //自行設定的路徑名稱
    $str= "Hello $name , age=> $age";
    $data=['str123'=> $str,
            'str456'=> $str];
    return view('f1',['data'=>$data]);   //將變數傳到前端，要加上面第5行
});
Route::get('/oop', function () {   //自行設定的路徑名稱
    return view('oop');   //檔名
});
Route::get('/user_user', function () {   //自行設定的路徑名稱
    return view('user.user');   //階層式  使用點連接
});

Route::get('/eat/{name}/{num}', function (Request $request,$name,$num) {   //自行設定的路徑名稱
   
    $data=['name'=> $name,
            'num'=> $num,
            'str'=>'hi'];
    return view('eat',['data'=>$data]);   //將變數傳到前端，要加上面第5行
});

// Route::get('/car', function () {   //自行設定的路徑名稱
//     return view('car');   //階層式  使用點連接
// });
Route::get('/student', function () {   //自行設定的路徑名稱
    return view('student');   //階層式  使用點連接
});


Route::prefix('admin')->group(function(){  //群組概念
    Route::get('/student',function(){
        return view('admin.student');
    });
    Route::get('/product',function(){
        return view('admin.product');
    });
});


// Route::get('/test1',[Test1Controller::class],'testFun');
Route::get('/car', [CarController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
