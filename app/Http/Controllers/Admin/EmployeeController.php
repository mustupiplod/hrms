<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')
            ->join('marital_statuses', 'marital_statuses.id', '=', 'employees.marital_status')
            ->join('education_masters', 'education_masters.id', '=', 'employees.education')
            ->join('degrees','degrees.id','=','employees.degree')
            ->join('parent_departments', 'parent_departments.id', '=', 'employees.parent_department')
            ->join('departments', 'departments.id', '=', 'employees.department')
            ->join('designations', 'designations.id', '=', 'employees.designation')
            ->select('employees.*', 'marital_statuses.marital_name', 'education_masters.school_name','degrees.degree_name', 'parent_departments.parent_depart_name', 'departments.department_name', 'designations.designation_name')
            ->get();
        return view('admin.employee.index', ['employees' => $employees]);
    }

    public function create()
    {
        $departments = DB::table('departments')->get();
        $designations = DB::table('designations')->get();
        $parent_departments = DB::table('parent_departments')->get();
        $educations = DB::table('education_masters')->get();
        $degrees = DB::table('degrees')->get();
        $maritals = DB::table('marital_statuses')->get();
        return view('admin.employee.create', ['departments' => $departments, 'designations' => $designations, 'educations'=>$educations,'degrees' => $degrees, 'parent_departments' => $parent_departments, 'maritals' => $maritals]);
    }

    public function store(Request $request)
    {
//        $employee = new Employee();
        $employee = Employee::create($request->all());
        $employee->save();
        return redirect('/admin/employee');
    }

    public function show($id)
    {
//        $employee = Employee::findOrFail($id);
        $employees = DB::table('employees')
            ->join('marital_statuses', 'marital_statuses.id', '=', 'employees.marital_status')
            ->join('education_masters', 'education_masters.id', '=', 'employees.education')
            ->join('degrees','degrees.id','=','employees.degree')
            ->join('parent_departments', 'parent_departments.id', '=', 'employees.parent_department')
            ->join('departments', 'departments.id', '=', 'employees.department')
            ->join('designations', 'designations.id', '=', 'employees.designation')
            ->select('employees.*', 'marital_statuses.marital_name', 'education_masters.school_name','degrees.degree_name', 'parent_departments.parent_depart_name', 'departments.department_name', 'designations.designation_name')
            ->where('employees.id', '=', $id)
            ->get();
//        dd($employees);
        return (view('admin.employee.show', compact('employees')));
    }

    public function edit($id)
    {
        $departments = DB::table('departments')->get();
        $designations = DB::table('designations')->get();
        $parent_departments = DB::table('parent_departments')->get();
        $educations = DB::table('education_masters')->get();
        $degrees = DB::table('degrees')->get();
        $maritals = DB::table('marital_statuses')->get();
        $employees = DB::table('employees')
            ->join('marital_statuses', 'marital_statuses.id', '=', 'employees.marital_status')
            ->join('education_masters', 'education_masters.id', '=', 'employees.education')
            ->join('degrees','degrees.id','=','employees.degree')
            ->join('parent_departments', 'parent_departments.id', '=', 'employees.parent_department')
            ->join('departments', 'departments.id', '=', 'employees.department')
            ->join('designations', 'designations.id', '=', 'employees.designation')
            ->select('employees.*', 'marital_statuses.marital_name', 'education_masters.school_name','degrees.degree_name', 'parent_departments.parent_depart_name', 'departments.department_name', 'designations.designation_name')
            ->where('employees.id', '=', $id)
            ->get();
        return view('admin.employee.edit',['employees'=>$employees,'departments'=>$departments,'designations'=>$designations,'educations'=>$educations,'degrees'=>$degrees,'parent_departments'=>$parent_departments,'maritals'=>$maritals]);
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
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/admin/employee');
    }
}
