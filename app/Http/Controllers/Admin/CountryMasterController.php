<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryMasterController extends Controller
{
    //
    public function index()
    {
        $countries = DB::table('countries')->get();
        return view('admin.country.index',['countries'=>$countries]);
    }

    public function create()
    {
        return view('admin.country.create');
    }

    public function store(Request $request)
    {
        $country = Country::create($request->all());
        $country->save();
        return redirect('admin/country');
    }
    public function edit($id)
    {
        $countries = Country::where('country_id','=',$id)->first();
        return view('admin.country.edit',['countries'=>$countries]);
    }

    public function update(Request $request,$id)
    {
        $data = array(
            'country_name'  =>$request->country_name,
            'is_active'     =>$request->is_active,
        );
        $country = Country::where('country_id','=',$id);
        $country->update($data);
        return redirect('admin/country');
    }
    public function delete($id)
    {
        $leaves = Country::where('country_id','=',$id);
        $leaves->delete();
        return redirect('/admin/country');
    }

}
