<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\IncreamentMaster;
use Illuminate\Http\Request;

class IncreamentMasterController extends Controller
{
    public function index()
    {
        $increaments = DB::table('increament_masters')->get();
        return view('admin.increament.index',['increaments' => $increaments]);
    }

    public function create()
    {
        return view('admin.increament.create');
    }

    public function store(Request $Request)
    {
//        $increament = new IncreamentMaster();
        $increament = IncreamentMaster::create($Request->all());
        $increament->save();
        return redirect('/admin/increament');
    }

    public function edit($id)
    {
        $increament= IncreamentMaster::whereId($id)->first();
            return view('admin.increament.edit',['increament'=>$increament]);
    }

    public function update(Request $Request, $id)
    {
        $increament = IncreamentMaster::findOrFail($id);
        $increament->update($Request->all());
        $increament->save();
        return redirect('/admin/increament');
    }

    public function delete($id)
    {
        $increament = IncreamentMaster::find($id);
        $increament->delete();
        return redirect('/admin/increament');
    }

}
