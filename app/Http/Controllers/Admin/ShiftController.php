<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shifts;
use Illuminate\Support\Facades\DB;

class ShiftController extends Controller
{

    public function index()
    {
        //
        $shifts = DB::table('shifts')->get();
        return view('admin.shifts.index',['shifts' => $shifts]);
    }

    public function create()
    {
        //
        return view('admin.shifts.create');
    }

    public function store(Request $request)
    {
        //insert data in database using the create method

        $ins = Shifts::create($request->all());
        $ins->save();
        return redirect('/admin/shift');

    }

    public function edit($id)
    {
        //this method is for fetching and redirecting to the edit page
        if($shifts = Shifts::whereId($id)->first())
        {
            return view('admin.shifts.edit',['shifts'=>$shifts]);
        }

    }

    public function update(Request $request, $id)
    {
        //
        $shift = Shifts::findOrFail($id);
        $shift->update($request->all());
        $shift->save();
        return redirect('/admin/shift')->with('success','data updated');
    }


    public function delete($id)
    {
        //
        $item = shifts::find($id);
        $item->delete();
        return redirect('/admin/shift');
    }
}
