<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function getList()
    {
    	return view('pages.contracts.contract');
    }

    public function getAdd()
    {
    	return view('pages.contracts.add');
    }
}
