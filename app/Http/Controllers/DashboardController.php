<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Employee;

use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Position;
use App\Models\Department;
use App\Models\Status;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_user = User::where('del',1)->count();
        $count_employee = Employee::where('del',1)->count();
        $count_emp_women = Employee::where('sex',2)->where('del',1)->count();
        $count_role = Role::all()->count();
        $count_village = Village::where('del',1)->count();
        $count_district = District::where('del',1)->count();
        $count_province = Province::where('del',1)->count();
        $count_position = Position::where('del',1)->count();
        $count_department = Department::where('del',1)->count();
        $count_Status = Status::where('del',1)->count();

        $new_emp = Employee::orderby('id','desc')->where('del',1)->take(5)->get();

        return view('dashboard', compact('count_employee','count_user','count_role','count_emp_women','count_village','count_district','count_province','count_position','count_department','count_Status','new_emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
