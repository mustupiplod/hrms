<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveRequestController extends Controller
{
    //
    public function index()
    {
        $leaverequests = DB::table('leave_requests')
            ->join('employees','employees.id','=','leave_requests.employee_name')
            ->join('leave_types','leave_types.leave_id','=','leave_requests.leave_type')
            ->select('employees.f_name','employees.l_name','leave_types.leave_name','leave_requests.*')
            ->get();
        return view('admin.leaverequest.index',['leaverequests'=>$leaverequests]);
    }

    public function create()
    {
        $employees = DB::table('employees')->get();
        $leavetypes = DB::table('leave_types')->get();
        return view('admin.leaverequest.create',['employees'=>$employees,'leavetypes'=>$leavetypes]);
    }

    public function store(Request $request)
    {
        $leaves = LeaveRequest::create($request->all());
        $leaves->save();
        return redirect('admin\leaverequest');
    }
    public function edit($id)
    {
        $leaverequests = DB::table('leave_requests')
            ->join('employees','employees.id','=','leave_requests.employee_name')
            ->join('leave_types','leave_types.leave_id','=','leave_requests.leave_type')
            ->select('employees.f_name','employees.l_name','leave_types.leave_name','leave_requests.*')
            ->where('request_id','=',$id)
        ->first();
        $employees = DB::table('employees')->get();
        $leavetypes = DB::table('leave_types')->get();
        return view('admin.leaverequest.edit',['employees'=>$employees,'leavetypes'=>$leavetypes,'leaverequest'=>$leaverequests]);
    }
    public function update(Request $request,$id)
    {
        $data = array(
            'employee_name'     =>$request->employee_name,
            'leave_type'        =>$request->leave_type,
            'from_date'         =>$request->from_date,
            'end_date'          =>$request->end_date,
            'total_days'        =>$request->total_days,
            'remark'            =>$request->remark,
            'is_active'         =>$request->is_active,
        );
        $leaverequest = LeaveRequest::where('request_id','=',$id);
        $leaverequest->update($data);
        return redirect('/admin/leaverequest');
    }
    public function delete($id)
    {
        $leaverequest = LeaveRequest::where('request_id','=',$id);
        $leaverequest->delete();
        return redirect('/admin/leaverequest');
    }
}
