<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function hi(){
        
        return view('student');
    }
    public function index(Request $request,$name){   //這裡帶入參數

        dd($request);
        // student/gina?student=gina&age=30  輸入這段  可從request看
    }
}