<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\CompanyPolicy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyPolicyController extends Controller
{
    //
    public function index()
    {
        $policies = DB::table('company_policies')
            ->join('employees','employees.id','=','company_policies.employees')
            ->select('employees.f_name','employees.l_name','company_policies.*')
            ->get();
        return view('admin.companypolicy.index',['policies'=>$policies]);
    }
    public function create()
    {
        $employees = DB::table('employees')->get();
        return view('admin.companypolicy.create',['employees'=>$employees]);
    }
    public function store(Request $request)
    {
//        $policy = CompanyPolicy::create($request->all());
        $title = $request->policy_title;
        $description = $request->description;
        $employees = implode(',',$request->employees);
        $policy = new CompanyPolicy;
        $policy->insert(['policy_title'=>$title,'description'=>$description,'employees'=>$employees,'created_at'=>Carbon::now()]);
        return redirect('/admin/policy');
    }
    public function edit($id)
    {
        $employees = DB::table('employees')->get();
        $policies = DB::table('company_policies')
            ->join('employees','employees.id','=','company_policies.employees')
            ->select('employees.f_name','employees.l_name','company_policies.*')
            ->where('company_policies.id','=',$id)
            ->get();
        return view('admin.companypolicy.edit',['policies'=>$policies,'employees'=>$employees]);
    }
    public function update(Request $request,$id)
    {
        $title = $request->policy_title;
        $description = $request->description;
        $employees = implode(',',$request->employees);
        $policy = CompanyPolicy::findOrFail($id);
        $policy->update(['policy_title'=>$title,'description'=>$description,'employees'=>$employees]);
        $policy->save();
        return redirect('/admin/policy');
    }
    public function delete($id)
    {
        $policy = CompanyPolicy::whereId($id);
        $policy->delete();
        return redirect('/admin/policy');
    }
}

