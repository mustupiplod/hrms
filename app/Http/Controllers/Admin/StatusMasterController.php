<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\DB;
use App\Models\StatusMaster;
use Illuminate\Http\Request;

class StatusMasterController extends Controller
{
    //
    public function index()
    {
        $statuss = DB::table('status_masters')->get();
        return view('admin.status.index',['statuss'=>$statuss]);
    }

    public function create()
    {
        return view('admin.status.create',);
    }

    public function store(Request $Request)
    {
        $status = new StatusMaster();
        $status =StatusMaster::create($Request->all());
        $status->save();
        return redirect('/admin/status');
    }

    public function edit($id)
    {
        $status = StatusMaster::whereId($id)->first();
            return view('admin.status.edit',['status'=>$status]);

    }

    public function update(Request $Request, $id)
    {
        $status = StatusMaster::findOrFail($id);
        $status->update($Request->all());
        $status->save();
        return redirect('/admin/status');
    }

    public function delete($id)
    {
        $status = StatusMaster::find($id);
        $status->delete();
        return redirect('/admin/status');
    }

}

