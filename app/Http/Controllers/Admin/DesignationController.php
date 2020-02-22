<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use App\Models\Designations;
use Illuminate\Support\Facades\DB;

class designationController extends Controller
{
    public function index()
    {
        // this is the view which will return home page
        $designations = DB::table('designations')->get();
        return view('admin.designation.index',['designations' => $designations]);
    }

    public function create()
    {
        //
        return view('admin.designation.create');
    }

    public function store(Request $request)
    {
        //
        $designation = Designations::create($request->all());
        $designation->save();
        return redirect('/admin/designation');
    }

    public function edit($id)
    {
        //
        if ($designation = Designations::whereId($id)->first())
        {
            return view('admin/designation/edit', ['designation' => $designation]);
        }
    }

    public function update(Request $request, $id)
    {
        // method to update designation

        $designation = Designations::findOrFail($id);
        $designation->update($request->all());
        $designation->save();
        return redirect('/admin/designation');
    }

    public function delete($id)
    {
        //
        $designation = Designations::find($id);
        $designation->delete();
        return redirect('/admin/designation');
    }
}
