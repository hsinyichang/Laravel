<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;   //這行是要使用student.php內的資料表，才能跑資料

class StudentController extends Controller
{
    //
    public function index()
    {
        $data=Student::all(); //抓到db資料
        // dd($data);
        return view('student.index',['data'=>$data]);

        // foreach(Student::all() as $student){
        //     echo $student->name;
        //     echo $student->chinese;
        //     echo $student->english;
        //     echo $student->math;
        // }
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $student = new Student();
 
        $student->id = $request->id;
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->math = $request->math;
 
        $student->save();
        return redirect()->route('students.index');  //導回首頁
    }
    public function edit($id){
        dd($id);
    }
    public function update(Request $request,$id){
        $student = Student::find($id);
     
    $student->name = 'Paris to London';
     
    $student->save();

    }

}
