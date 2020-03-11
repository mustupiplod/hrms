<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationMasterController extends Controller
{
    //
    //For fetching all countries
    public function getCountries()
    {
        $countries= DB::table("countries")->get();
        return view('admin.location.index')->with('countries',$countries);
    }

//For fetching states
    public function getStates($id)
    {
        $states = DB::table("states")
            ->where("country_id",'=',$id)
            ->select("states.*")
        ->get();
        return response()->json($states);
    }

//For fetching cities
    public function getCities($id)
    {
        $cities= DB::table("cities")
            ->where("state_id",'=',$id)
            ->select("cities.*")
        ->get();
        return response()->json($cities);
    }
}
