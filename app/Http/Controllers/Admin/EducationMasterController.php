<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\EducationMaster;
use Illuminate\Http\Request;

class EducationMasterController extends Controller
{
    public function index()
    {
        $educations = DB::table('education_masters')->get();
        return view('admin.education.index',['educations' => $educations]);
    }

    public function create()
    {
        $degrees = DB::table('degrees')->get();
        return view('admin.education.create',['degrees'=>$degrees]);
    }

    public function store(Request $Request)
    {
//        $education = new EducationMaster();
        $education = EducationMaster::create($Request->all());
        $education->save();
        return redirect('/admin/education');
    }

    public function edit($id)
    {
        $education= EducationMaster::whereId($id)->first();
            $degrees = DB::table('degrees')->get();
            return view('admin.education.edit',['education'=>$education],['degrees'=>$degrees]);
    }

    public function update(Request $Request, $id)
    {
        $education = EducationMaster::findOrFail($id);
        $education->update($Request->all());
        $education->save();
        return redirect('/admin/education');
    }

    public function delete($id)
    {
        $education = EducationMaster::find($id);
        $education->delete();
        return redirect('/admin/education');
    }

}
