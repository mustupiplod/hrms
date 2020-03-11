<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityMasterController extends Controller
{
    //
    public function index()
    {
        $cities = DB::table('cities')
            ->join('countries','countries.country_id','=','cities.country_id')
            ->join('states','states.state_id','=','cities.state_id')
            ->select('countries.country_name','states.state_name','cities.*')
            ->get();

        return view('admin.city.index', ['cities'=>$cities]);
    }

    public function create()
    {
        $countries = DB::table('countries')->get();
        $states = DB::table('states')->get();
        return view('admin.city.create',['countries'=>$countries,'states'=>$states]);
    }

    public function store(Request $request)
    {
        $country = City::create($request->all());
        $country->save();
        return redirect('admin/city');
    }

    public function edit($id)
    {
        $cities = DB::table('cities')
            ->join('countries','countries.country_id','=','cities.country_id')
            ->join('states','states.state_id','=','cities.state_id')
            ->select('countries.country_name','states.state_name','cities.*')
            ->where('cities.city_id','=',$id)
            ->first();
        $countries = DB::table('countries')->get();
        $states = DB::table('states')->get();
        return view('admin.city.edit', ['cities' => $cities,'countries'=>$countries,'states'=>$states]);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'city_name'     => $request-> city_name,
            'state_id'      => $request->state_id,
            'country_id'    => $request->country_id,
            'is_active'     => $request->is_active,
        );
        $country = City::where('city_id', '=', $id);
        $country->update($data);
        return redirect('admin/city');
    }

    public function delete($id)
    {
        $leaves = City::where('city_id', '=', $id);
        $leaves->delete();
        return redirect('/admin/city');
    }
}
