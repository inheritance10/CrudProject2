<?php

namespace App\Http\Controllers;
use http\Exception\BadConversionException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Models\Course;
class CourseController extends Controller
{
    public function index(){
        $course = DB::table('course')->get();
        return view('Course')->with('course',$course);

       /*$course = Course::all();
        dd($course);*/
    }

    public function courseInsert(){
        return view('courseInsert');
    }

    public function courseInsertPost(Request $request){

         /*$request->validate([
           'courseTitle'=>'required',
           'courseName'=>'required',
           'courseContent'=>'required'
        ]);*/

        if($request->courseTitle == "" || $request->courseName == ""
         || $request->coursecontent==""
        ){
            return back()->with('status',"Lütfen alanları tüm kutuları doldurun");
        }else{
            $course = DB::table('course')->insert([
                'courseTitle'=>$request->courseTitle,
                'courseName'=>$request->courseName,
                'courseContent'=>$request->courseContent
            ]);
            if($course){
                return back()->with('status',"kayıt başarılı");
            }
        }
    }

    public function courseUpdate($id){

        $course = DB::table('course')->where('id',$id)
            ->first();
        return view('courseUpdate')->with('course',$course);
    }

    public function courseUpdatePost(Request $request,$id){
        if($request->courseTitle == "" || $request->courseName == ""
            || $request->courseContent == ""){
            return back()->with('status','Lütfen boşlukları doldurun');
        }
        else{
            $course = DB::table('course')
                ->where('id',$id)
                ->update([
                    'courseTitle'=>$request->courseTitle,
                    'courseName'=>$request->courseName,
                    'courseContent'=>$request->courseContent
                ]);
            if($course){
                return back()->with('status','Kayıt başarıyla güncellendi');
            }
        }
    }

    public function courseDelete($id){
        $course = DB::table('course')
             ->where('id',$id)
             ->delete();

         if($course){
             return back()->with('status','kayıt başarıyla silindi');
         }
    }
}
