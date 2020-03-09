<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\LeaveTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveTypeMaster extends Controller
{
    //
    public function index()
    {
        $leaves = DB::table('leave_types')->get();
        return view('admin.leavetype.index',['leaves'=>$leaves]);
    }

    public function create()
    {
        return view('admin.leavetype.create');
    }

    public function store(Request $request)
    {
        $leaves = LeaveTypes::create($request->all());
        $leaves->save();
        return redirect('/admin/leavetype');
    }

    public function edit($id)
    {
        $leave = LeaveTypes::where('leave_id','=',$id)->first();
        return view('admin.leavetype.edit',['leave'=>$leave]);
    }
    public function update(Request $request,$id)
    {
        $data = array(
            'leave_name' => $request->leave_name,
            'leave_days' => $request->leave_days,
            'is_active'  => $request->is_active
        );
        $leaves = LeaveTypes::where('leave_id','=',$id);
        $leaves->update($data);
        return redirect('/admin/leavetype');
    }
}
