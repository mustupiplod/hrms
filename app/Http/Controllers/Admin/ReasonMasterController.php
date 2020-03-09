<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReasonMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReasonMasterController extends Controller
{
    //
    public function index()
    {
        $reasons = DB::table('reason_masters')->get();
        return view('admin.reasons.index', ['reasons' => $reasons]);
    }

    public function create()
    {
        return view('admin.reasons.create');
    }

    public function store(Request $request)
    {
        $reasons = ReasonMaster::create($request->all());
        $reasons->save();
        return redirect('/admin/reason');
    }

    public function edit($id)
    {
        $reason = ReasonMaster::findOrFail($id);
        $reason->all();
        return view('admin.reasons.edit',['reasons'=>$reason]);
    }

    public function update(Request $request, $id)
    {
        $reason = ReasonMaster::find($id);
        $reason->update($request->all());
        $reason->save();
        return redirect('/admin/reason');
    }

    public function delete($id)
    {
        $reason = ReasonMaster::whereId($id);
        $reason->delete();
        return redirect('/admin/reason');
    }
}
