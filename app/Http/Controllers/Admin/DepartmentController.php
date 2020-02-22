<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{

    public function index()
    {
        //here is the method that will return home page view
        $departments = DB::table('departments')->get();
        return view('admin.department.index',['departments' => $departments]);
    }

    public function create()
    {
        //
        $departs = DB::table('departments')->get();
        return view('admin.department.create',['departs'=>$departs]);
    }

    public function store(Request $Request)
    {
        //
        $depart = new department();
        $depart = Department::create($Request->all());
        $depart->save();
        return redirect('/admin/department');
    }

    public function edit($id)
    {
        //in this method fetch all details using id
        if ($department = Department::whereId($id)->first())
        {
            $departs = DB::table('departments')->get();
            return view('admin/department/edit', ['department' => $department , 'departs' => $departs]);
        }

    }

    public function update(Request $Request, $id)
    {
        //here the date will be updated into database

        $department = Department::findOrFail($id);
        $department->update($Request->all());
        $department->save();
//          dd($Request->all(), $id);
        return redirect('admin/department/');

    }


    public function delete($id)
    {
        //here we will delete the data
        $department = Department::find($id);
        $department->delete();
        return redirect('admin/department');
    }
}
