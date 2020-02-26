<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team_master;
//use App\Models\Team_Employees;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    //
    public function index()
    {


        $result = DB::table('team_masters')
            ->distinct()
            ->join('team_employees_masters', 'team_employees_masters.team_master_id', '=', 'team_masters.id')
            ->where('team_masters.id', '=', 'team_employees_masters.team_master_id')
            ->select('team_masters.*', 'team_employees_masters.*')
            ->groupBy('team_masters.name')
            ->get();
        return view("admin.teams.index", ['Team_data' => $result]);
//        print_r($result);
//        //dd(DB::getQueryLog()); // Show results of log
//        dd($result);

//        $employee_data = DB::table('team_masters')
//            ->join('team_employees_masters', 'team_masters.id', '=', 'team_employees_masters.team_master_id')
//            ->join('employees', 'employees.id', '=', 'team_employees_masters.employees_id')
//            ->select('employees.f_name','employees.l_name', 'team_masters.name')
//            ->where('team_masters.id','=','team_employees_masters.team_master_id')
//            ->get();
//        dd(DB::getQueryLog($employee_data)); // Show results of log
//        dd($employee_data);
//        $employee_group_data = $employee_data->groupBy('name');
        return view("admin.teams.index", ['teams' => $employee_data]);

    }

    public function create()
    {
        $employees = DB::table('employees')->get();
        return view("admin.teams.create", compact("employees"));
    }

    public function store(Request $request)
    {
        $team_name = $request->name;
        $team_member_emp_ids = implode(',', $request->employees_id);
        $team_member_emp_ids_expo = (explode(",", $team_member_emp_ids));

//       insert into master of team
        DB::table('team_masters')->insert(['name' => $team_name]);
        $emp_last_id = DB::getPdo()->lastInsertId(); //  get last id

        foreach ($team_member_emp_ids_expo as $ids) {
            $data = array('team_master_id' => $emp_last_id, 'employees_id' => $ids);
            DB::table('team_employees_masters')->insert($data);
        }
        return redirect('admin/team');
    }
}
