<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    public function index()
    {
        $courses = DB::table('courses')->get();
    }

    public function create()
    {

    }

    public function store()
    {

    }
}
