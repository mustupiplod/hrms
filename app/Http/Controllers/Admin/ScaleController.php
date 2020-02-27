<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Scale;
use Illuminate\Http\Request;

class ScaleController extends Controller
{
    public function index()
    {
        $scales = DB::table('scales')->get();
        return view('admin.scale.index',['scales' => $scales]);
    }

    public function create()
    {
        $currencys = DB::table('currency_masters')->get();
        $employees = DB::table('employees')->get();
        return view('admin.scale.create',['currencys'=>$currencys,'employees'=>$employees]);
    }

    public function store(Request $Request)
    {
//        $scale = new Scale();
        $scale = Scale::create($Request->all());
        $scale->save();
        return redirect('/admin/scale');
    }

    public function edit($id)
    {

        $currencys = DB::table('currency_masters')->get();
        $scale= Scale::whereId($id)->first();
        return view('admin.scale.edit',['scale'=>$scale,'currencys'=>$currencys]);
    }

    public function update(Request $Request, $id)
    {
        $scale = Scale::findOrFail($id);
        $scale->update($Request->all());
        $scale->save();
        return redirect('/admin/scale');
    }

    public function delete($id)
    {
        $scale = Scale::find($id);
        $scale->delete();
        return redirect('/admin/scale');
    }

}
