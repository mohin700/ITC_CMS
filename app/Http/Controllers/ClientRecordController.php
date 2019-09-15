<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class ClientRecordController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }


    public function submit(Request $request)
    {
    	$this->validate($request, [

    		'employeeID' => 'required'
    	]);

    	$employee = Employee::where( 'employeeID', $request->employeeID)->first();
    	

    	if (empty($employee->id)) {
    		return back()->with('error', 'Please Enter Valid Employee ID');
    	}else{
    		return view('clientrecord', compact('employee'));
    	}
    }



    public function clientrecord(Request $request)
    {
    	return $request;
    }
}
