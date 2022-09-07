<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;   //這行是要使用student.php內的資料表，才能跑資料
date_default_timezone_set("Asia/Taipei");

class StudentController extends Controller
{
    //
    public function index()
    {
        //model student data 抓出來 ORM
        // $data=Student::all(); //抓到db資料，↓也可以排序方式顯現
        //**get => fetchall 全部資料
        $data=Student::orderBy('id','asc')->get();
        // dd($data);
        return view('student.index',['data'=>$data]);  //將資料帶入首頁頁面呈現

        // foreach(Student::all() as $student){
        //     echo $student->name;
        //     echo $student->chinese;
        //     echo $student->english;
        //     echo $student->math;
        // }
    }

    public function create(){
        //直接到新增畫面
        return view('student.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $student = new Student();  //models/student  student資料表
 
        $student->id = $request->id;  //student資料表的id 為http傳送的id
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->math = $request->math;
 
        $student->save();
        return redirect()->route('students.index');  //導回首頁
    }

    public function edit($id){
        //**first=>fetch 單筆資料
        $data=Student::where('id',$id)->first();
        // $data =Student::find($id);  //也可用這行
        // dd('ok');
        return view('student.edit',['data'=>$data]);
    }

    public function update(Request $request,$id){
        // $input=$request->except(['_method','_token']); 
        // dd($input);  //dd出來的結果會沒有上面兩個欄位
        $student =Student::find($id);  //找到該筆資料的id
        // $student=Student::where('id',$id)->first();
     
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->math = $request->math;
     
        $student->save();
        return redirect()->route('students.index');
    }

    public function show($id){

    }

    public function destroy($id){
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }

}
