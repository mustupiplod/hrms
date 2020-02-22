<?php

namespace App\Http\Controllers\Admin;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = DB::table('courses')->get();
        $course = Course::all();
    }

    public function create()
    {

    }

    public function store()
    {

    }
}
