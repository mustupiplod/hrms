<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\DB;
use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    //
    public function index()
    {
        $degrees = DB::table('degrees')->get();
        return view('admin.degree.index',['degrees'=>$degrees]);
    }

    public function create()
    {
        $degrees = DB::table('degrees')->get();
        return view('admin.degree.create',['degrees'=>$degrees]);
    }

    public function store(Request $Request)
    {
        $degree = new Degree();
        $this->validate($Request,[
            'name'=>'required|unique:degrees',
            'is_active'=>'required',
        ]);
        $degree =Degree::create($Request->all());
        $degree->save();
        return redirect('/admin/degree');
    }

    public function edit($id)
    {
        if($degree = Degree::whereId($id)->first())
        {
            $degrees = DB::table('degrees')->get();
            return view('admin.degree.edit',['degree'=>$degree],['degrees'=>$degrees]);
        }

    }

    public function update(Request $Request, $id)
    {
        $degree = Degree::findOrFail($id);
        $degree->update($Request->all());
        $degree->save();
        return redirect('/admin/degree');
    }

    public function delete($id)
    {
        $degree = Degree::find($id);
        $degree->delete();
        return redirect('/admin/degree');
    }

}
