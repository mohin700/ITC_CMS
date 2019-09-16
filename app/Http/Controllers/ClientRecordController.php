<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\ClientRecord;

class ClientRecordController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }


    public function submit(Request $request)
    {
    	$this->validate($request, [
    		'employee_id' => 'required'
    	]);
    	$employee = Employee::where( 'employeeID', $request->employee_id)->first();
    	

    	if (empty($employee->id)) {
    		return back()->with('error', 'Please Enter Valid Employee ID');
    	}else{
    		return view('clientrecord', compact('employee'));
    	}
    }



    public function clientrecord(Request $request)
    {
    	$this->validate($request, [
            'clients_name'  =>  'required',
            'cp_name'       =>  'required',
            'cp_phone'      =>  'required',
            'cp_email'      =>  'required|email',
            'prospective'   =>  'required',
            'brief'         =>  'required',
            'submission_type'  =>  'required',
            'work_type'        =>  'required',
            'submission_date'  =>  'required',
            'employeeID'       => 'required'
        ]);


        $records = ClientRecord::create([
            'employee_id'   =>  $request->employeeID,
            'clients_name'  =>  $request->clients_name,
            'cp_name'       =>  $request->cp_name,
            'cp_phone'      =>  $request->cp_phone,
            'cp_email'      =>  $request->cp_email,
            'prospective'   =>  $request->prospective,
            'brief'         =>  $request->brief,
            'submission_type'  =>  $request->submission_type,
            'work_type'        =>  $request->work_type,
            'submission_date'  =>  $request->submission_date,
            'dep_planning'  => $request->dep_planning,
            'dep_creative'  => $request->dep_creative,
            'dep_operation' => $request->dep_operation,
            'dep_accounts'  => $request->dep_accounts,
            'dep_hr'        => $request->dep_hr,
            'dep_admin'     => $request->dep_admin,
            'dep_it'        => $request->dep_it,
            'dep_Other'     => $request->dep_Other,
            
        ]);

        if (!$records->id) {
            return redirect()->route('welcome')->with('error', 'Something Went Wrong, Please enter valaid info');           
        }else{
           return redirect()->route('welcome')->with('success', 'Client Visit Report Successfully Submitted');
        }




    }
}
