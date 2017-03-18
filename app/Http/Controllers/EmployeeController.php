<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeeController extends Controller
{
    public function getList()
    {
    	$employee = User::all();
    	$employee = User::paginate(5);
    	return view('pages.employee', ['employee' => $employee]);
    }
}
