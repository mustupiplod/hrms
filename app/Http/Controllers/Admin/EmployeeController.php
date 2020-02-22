<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('admin.employee.index',['employees'=>$employees]);
    }
    public function create()
    {
        $departments = DB::table('departments')->get();
        $designations = DB::table('designations')->get();
        $parent_departments = DB::table('parent_departments')->get();
        $degrees = DB::table('degrees')->get();
//        $marital = DB::table('marital_status')
        return view('admin.employee.create',['departments'=>$departments,'designations'=>$designations,'degrees'=>$degrees,'parent_departments'=>$parent_departments]);
    }
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee = Employee::create($request->all());
        $employee->save();
        return redirect('/admin/employee');
    }
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return(view('admin.employee.show',compact('employee')));
    }
    public function edit($id)
    {
        $departments = DB::table('departments')->get();
        $designations = DB::table('designations')->get();
        $parent_departments = DB::table('parent_departments')->get();
        $degrees = DB::table('degrees')->get();
//        $marital = DB::table('marital_status')
        $employee = Employee::whereId($id)->first();
        return view('admin.employee.edit',['employee'=>$employee,'departments'=>$departments,'designations'=>$designations,'degrees'=>$degrees,'parent_departments'=>$parent_departments]);

    }
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        $employee->save();
        return redirect('/admin/employee');
    }
    public function delete($id)
    {

    }
}
