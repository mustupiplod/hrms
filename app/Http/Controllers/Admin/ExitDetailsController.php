<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExitDetails;
use Illuminate\Support\Facades\DB;

class ExitDetailsController extends Controller
{
    //
    public function index()
    {
        $exitdetails = DB::table('exit_details')
            ->join('employees','employees.id','=','exit_details.employee_name')
            ->select('exit_details.*','employees.f_name','employees.l_name')
            ->get();
        return view('admin.exitdetails.index',['exitdetails'=>$exitdetails]);
    }
    public function create()
    {
        $employees = DB::table('employees')->get();
        return view('admin.exitdetails.create',['employees'=>$employees]);
    }
    public function store(Request $request)
    {
        $exitdetail = ExitDetails::create($request->all());
        $exitdetail->save();
        return redirect('/admin/exitdetails');
    }
    public function edit($id)
    {
//        $exit = ExitDetails::whereId($id)->first();
        $employees = DB::table('employees')->get();
        $exitdetails = DB::table('exit_details')
            ->join('employees','employees.id','=','exit_details.employee_name')
            ->select('exit_details.*','employees.f_name','employees.l_name')
            ->where('employees.id','=',$id)
            ->get();
        return view('admin.exitdetails.edit',['exitdetails'=>$exitdetails,'employees'=>$employees]);
    }
    public function update(Request $request,$id)
    {
        $exitdetails = ExitDetails::findOrFail($id);
        $exitdetails->update($request->all());
        $exitdetails->save();
        return redirect('/admin/exitdetails');
    }
    public function delete($id)
    {
        $exitdetails = ExitDetails::find($id);
        $exitdetails->delete();
        return redirect('/admin/exitdetails');
    }
}
