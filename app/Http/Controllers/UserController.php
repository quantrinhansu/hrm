<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;
use App\Department;
use Auth;
use App\Employee_relatives;
use App\JobType;
use App\Team;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = User::find($id);
        $employee_relatives = Employee_relatives::where('user_id', '=', $id)->first();
        if ($user) {
            return view('pages.profile', ['user' => $user, 'employee_relatives' => $employee_relatives]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getList()
    {
        $employee = User::all();
        $employee = User::paginate(20);
        return view('pages.employees.employee', ['employee' => $employee]);
    }
    /**
     * postDelete
     */

    public function postDelete(Request $request)
    {
        $out = User::destroy($request->id);
        if ($out) {
            return $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        }
    }


    public function postUpdate(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $designation = $request->designation;
        $email = $request->email;
        $phonenumber = $request->phonenumber;

        $user = new User();
        $user = User::find($id);

        if ($user) {
            $user->name = $name;
            $user->job_type = $designation;
            $user->email = $email;
            $user->phone_number = $phonenumber;
            $user->save();
            return $response = array(
                'msg' => 'Setting created successfully',
            );
        }
    }

    public function postSettingUpdate(Request $request)
    {
        $id            = $request->id;
        $name          = $request->name;
        $email         = $request->email;
        $education     = $request->education;
        $location      = $request->location;
        $date_of_birth = $request->date_of_birth;
        $notes         = $request->notes;
        $phonenumber   = $request->phonenumber;
        $skill         = $request->skill;

        $user = new User();
        $user = User::find($id);

        if ($user) {
            $user->name          = $name;
            $user->email         = $email;
            $user->education     = $education;
            $user->present_address      = $location;
            $user->date_of_birth = $date_of_birth;
            $user->noted         = $notes;
            $user->skill         = $skill;
            $user->phone_number   = $phonenumber;

            $user->save();
            return $response = array(
                'msg' => 'Setting created successfully',
            );
        }
    }    


    public function getAdd()
    {
        $department = Department::all();
        $job_type = JobType::all();
        $team = Team::all();
        return view('pages.employees.add', ['department' => $department, 'job_type' => $job_type, 'team' => $team]);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
                'name'                  =>  'required',
                'email'                 =>  'required|email',
                'password'              => 'required',
                'password_confirm'      => 'same:password',
                'role'                  => 'required'
                ],[
                'name.required'         => 'Name is required',
                'email.required'        => 'Email is required',
                'email.email'           =>  'The email must be a valid email address',
                'password.required'     => 'Password is required',
                'password_confirm.same' => 'Password is wrong',
                'role.required'         => 'Role is required',        
                ]);
        $user = new User;
        $user->name              = $request->name;
        $user->email             = $request->email;
        $user->password          = bcrypt($request->password);
        $user->role              = $request->role;
        $user->active            = 1;
        $user->gender            = $request->gender;
        $user->avatar            = "";
        $user->first_name        = $request->first_name;
        $user->last_name         = $request->last_name;
        $user->permanent_address = $request->permanent_address;
        $user->present_address   = $request->present_address;
        $user->date_of_birth     = $request->date_of_birth;
        $user->joining_date      = $request->joining_date;
        $user->nationality       = $request->nationality;
        $user->phone_number      = $request->phone_number;
        $user->bank_account_name = $request->bank_account_name;
        $user->bank_name         = $request->bank_name;
        $user->insurance_code    = $request->insurance_code;
        $user->tax_code          = $request->tax_code;
        $user->maritial_status   = $request->maritial_status;
        $user->job_position      = $request->job_position;
        $user->department_id     = $request->department;
        $user->team_id           = $request->team;
        $user->job_type_id       = $request->job_type;
        $user->noted             = $request->noted;
        $user->leave_per_month   = 0;
        $user->leave_per_year    = 0;
        $user->save();
        return redirect('employee/add')->with('notification', 'Add success');
    }
}
