<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class CarController extends Controller
{
    public function index(){
    //    dd('hello CarController index');
        return view('car');
    }
}