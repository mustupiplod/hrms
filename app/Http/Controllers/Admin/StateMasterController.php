<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StateMasterController extends Controller
{
    public function index()
    {
        $states = DB::table('states')
            ->join('countries','countries.country_id','=','states.country_id')
            ->select('countries.country_name','states.*')
            ->get();

        return view('admin.country.index', ['states'=>$states]);
    }

    public function create()
    {
        $countries = DB::table('countries')->get();
        return view('admin.state.create',['countries'=>$countries]);
    }

    public function store(Request $request)
    {
        $country = State::create($request->all());
        $country->save();
        return redirect('admin/state');
    }

    public function edit($id)
    {
        $states = DB::table('states')
            ->join('countries','countries.country_id','=','states.country_id')
            ->select('countries.country_name','states.*')
            ->where('states.state_id','=',$id)
            ->first();
        $countries = DB::table('countries')->get();
        return view('admin.state.edit', ['states' => $states,'countries'=>$countries]);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'state_name' => $request->state_name,
            'country_id' => $request->country_id,
            'is_active' => $request->is_active,
        );
        $country = State::where('state_id', '=', $id);
        $country->update($data);
        return redirect('admin/state');
    }

    public function delete($id)
    {
        $leaves = State::where('state_id', '=', $id);
        $leaves->delete();
        return redirect('/admin/state');
    }

}

