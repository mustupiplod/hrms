<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ParentDepartment;
use Illuminate\Support\Facades\DB;


class ParentDepartmentController extends Controller
{
    //
    public function index()
    {
        $parents = DB::table('parent_departments')->get();
        return view('admin.parentdepartment.index',['parents'=> $parents]);
    }

    public function create()
    {
        return view('admin.parentdepartment.create');
    }

    public function store(Request $Request)
    {
        $parent = new ParentDepartment();
        $this->validate($Request,[
            'name'=>'required|unique:parent_departments',
            'is_active'=>'required',
        ]);
        $parent = ParentDepartment::create($Request->all());
        $parent->save();
        return redirect('admin/parentdepartment');
    }

    public function edit($id)
    {
        if ($parent = ParentDepartment::whereId($id)->first())
        {
            return view('admin/parentdepartment/edit', ['parent' => $parent ]);
        }
    }

    public function update(Request $Request, $id)
    {
        $parent = parentDepartment::findOrFail($id);
        $parent->update($Request->all());
        $parent->save();
        return redirect('/admin/parentdepartment');
    }

    public function delete($id)
    {
        $parent =  ParentDepartment::find($id);
        $parent->delete();
        return redirect('/admin/parentdepartment');

    }

}
