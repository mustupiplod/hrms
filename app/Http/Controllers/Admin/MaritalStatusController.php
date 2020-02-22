<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MaritalStatus;
class MaritalStatusController extends Controller
{
    //
    public function index()
    {
        $maritals = DB::table('marital_statuses')->get();
        return view('admin.maritalstatus.index',['maritals'=>$maritals]);
    }
    public function create()
    {
        return view('admin.maritalstatus.create');
    }
    public function store(Request $request)
    {
        $maritals = MaritalStatus::create($request->all());
        $maritals->save();
        return redirect('/admin/maritalstatus');
    }
    public function edit($id)
    {
        $marital = MaritalStatus::whereId($id)->first();
        return view('admin.maritalstatus.edit',['marital'=>$marital]);
    }
    public function update(Request $request,$id)
    {
        $marital = MaritalStatus::findOrFail($id);
        $marital->update($request->all());
        $marital->save();
        return redirect('/admin/maritalstatus');
    }
    public function delete($id)
    {
        $marital = MaritalStatus::find($id);
        $marital->delete();
        return redirect('/admin/maritalstatus');
    }
}
