<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\EmpIncreament;
use Illuminate\Http\Request;

class EmpIncreamentController extends Controller
{
    public function index()
    {
        $empincreaments = DB::table('emp_increaments')->get();
        return view('admin.employeeIncreament.index',['empincreaments' => $empincreaments]);
    }

    public function create()
    {
        $designations = DB::table('designations')->get();
        $increaments = DB::table('increament_masters')->get();
        $employees = DB::table('employees')->get();
        return view('admin.employeeIncreament.create',['designations'=>$designations,'increaments'=>$increaments,'employees'=>$employees]);
    }

    public function store(Request $Request)
    {
//        $empincreament = new EmpIncreament();
        $empincreament = EmpIncreament::create($Request->all());
        $empincreament->save();
        return redirect('/admin/empincreament');
    }

    public function edit($id)
    {
        $designations = DB::table('designations')->get();
        $increaments = DB::table('increament_masters')->get();
        $employees = DB::table('employees')->get();
        $empincreament= EmpIncreament::whereId($id)->first();
        return view('admin.employeeIncreament.edit',['empincreament'=>$empincreament,'designations'=>$designations,'increaments'=>$increaments,'employees'=>$employees]);
    }

    public function update(Request $Request, $id)
    {
        $empincreament = EmpIncreament::findOrFail($id);
        $empincreament->update($Request->all());
        $empincreament->save();
        return redirect('/admin/empincreament');
    }

    public function delete($id)
    {
        $empincreament = EmpIncreament::find($id);
        $empincreament->delete();
        return redirect('/admin/empincreament');
    }

}
