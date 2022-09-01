<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\Student1Controller;   //新的controller  要啟用它
use App\Http\Controllers\StudentController;   //新的controller  要啟用它
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BikeController;
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
Route::get('/example', function () {
    return view('example');
});
Route::get('/hi', function () {
    return "<h1>hi</h1>";
});
Route::get('/student', function () {
    return view('student');
});
Route::get('/hi/{name}', function ($name) {
    return "<h1>hi  ".$name."</h1>";
});
Route::get('/hi/{name}/{num}', function ($name,$num) {
    $str="<h1>hi　".$name."　num=>　".$num."</h1>";   //這個沒有hi的頁面    可直接呈現內容
    return $str;
});
Route::get('/math/{num1}/{num2}', function ($num1,$num2) {  
    return $num1."+".$num2."=".$num1+$num2;   //這個沒有math的頁面    可直接呈現內容
});
Route::get('/f1/{name}/{age}', function (Request $request,$name,$age) {   //自行設定的路徑名稱
    $str= "Hello $name , age=> $age";
    $data=['str123'=> $str,
            'str456'=> $str.$str];   //f1頁面可選擇要呈現'str123' 或者'str456' 的頁面
    return view('f1',['data'=>$data]);   //將變數傳到前端，要加上面第5行
});
Route::get('/oop', function () {   //自行設定的路徑名稱
    return view('oop');   //檔名
});
Route::get('/user_user', function () {   //自行設定的路徑名稱
    return view('user.user');   //階層式  使用點連接   user資料夾裡面的user檔案
});

Route::get('/eat/{name}/{num}', function (Request $request,$name,$num) {   //自行設定的路徑名稱
   
    $data=['name'=> $name,
            'num'=> $num,
            'str'=>'hi'];
    return view('eat',['data'=>$data]);   //將變數傳到前端，要加上面第8行
});



Route::prefix('admin')->group(function(){  //群組概念
    Route::get('/student',function(){
        return view('admin.student');
    });
    Route::get('/product',function(){
        return view('admin.product');
    });
});

Route::get('/car', [CarController::class, 'index']);
Route::get('/student1/{name}', [Student1Controller::class, 'index']); //網址帶參數，到controller的StudentController更改
Route::get('/student1', [Student1Controller::class, 'hi'])->name('student123');
Route::resource('bikes', BikeController::class);
Route::resource('students', StudentController::class);