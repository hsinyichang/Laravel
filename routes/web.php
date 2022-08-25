<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test', function () {   //自行設定的路徑名稱
    return view('test');   //檔名
});
