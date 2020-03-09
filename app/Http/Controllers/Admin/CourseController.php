<?php

namespace App\Http\Controllers\Admin;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function Ramsey\Uuid\v1;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = DB::table('courses')
            ->join('question_masters','question_masters.id','=','courses.questionnaire')
            ->join('employees','employees.id','=','courses.trainer')
            ->select('courses.*','employees.f_name','employees.l_name','question_masters.question_name')
            ->get();
        return view("admin.course.index",['courses'=>$courses]);
    }

    public function create()
    {
        $employess = DB::table('employees')->get();
        $questions = DB::table('question_masters')->get();
        return view("admin.course.create",["employees"=>$employess,'questions'=>$questions]);
    }

    public function store(Request $request)
    {
        $coursecover = $request->file('course_image');

//        $extension = $coursecover->getClientOriginalExtension();
////        Storage::disk('public')->put($coursecover->getFilename().'.'.$extension,  File::get($coursecover));
///
        $course = Course::create($request->all());
        $course_title = $course->course_name;
        $destinationPath = 'course/'.$course_title.'/'; // upload path
        $profileImage = $course_title . "." . $coursecover->getClientOriginalExtension();
        $coursecover->move($destinationPath, $profileImage);
        $course->image = $profileImage;
        $course->save();
        return redirect('/admin/course');
    }
    public function edit($id)
    {
        $course = DB::table('courses')
            ->join('question_masters','question_masters.id','=','courses.questionnaire')
            ->join('employees','employees.id','=','courses.trainer')
            ->select('courses.*','employees.f_name','employees.l_name','question_masters.question_name')
            ->where('courses.id','=',$id)
            ->first();
//        $course = Course::findOrFail($id)->first();
        $employess = DB::table('employees')->get();
        $questions = DB::table('question_masters')->get();
        return view('admin.course.edit',['course'=>$course,'employees'=>$employess,'questions'=>$questions]);
    }

    public function update(Request $request,$id)
    {
        $course = Course::find($id);
        $courseimage = $request->file('course_image');
        $image = $request->image_name;
        if($courseimage != '')
        {
            $course_title = $course->course_name;
            $destinationPath = 'course/'.$course_title.'/'; // upload path
            $profileImage = $course_title . "." . $courseimage->getClientOriginalExtension();
            $courseimage->move($destinationPath, $profileImage);
            $course->image = $profileImage;
        }
        else
        {
            $course->image = $image;
        }

        $course->update($request->all());
        $course->save();
        return redirect('/admin/course');
    }

    public function delete($id)
    {
        $courses = Course::whereId($id);
        $courses->delete();
        return redirect('admin/course');
    }
}
