<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;
use App\Department;
use Auth;
use App\Employee_relatives;

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
        return $id;
    }
}
