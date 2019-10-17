<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Employee;
use App\User;


class EmployeeController extends Controller
{
	public function index(){
        $employees = Employee::all();
		return view('employee.employees', compact('employees') );
	}


    public function create(){
        $rms = User::where('role_id', 2)->get();
    	return view('employee.create', compact('rms')); 
    }


    public function store(Request $request){
    	
    	$this->validate($request, [

    		'employeeID'=> 'required',
    		'email'		=> 'required',
    		'phone'	    => 'required',
            'designation' => 'required',
    		'first_name'=> 'required',
            'last_name' => 'required',

    	]);

    	Employee::create([
    		'user_id'     => auth()->id(),
            'employeeID'  => $request->employeeID,
    		'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
    		'email'	      => $request->email,
    		'phone'       => $request->phone,
    		'designation' => $request->designation,

    	]);

    	return back()->with('success', 'New Employee successfully Added');
    }
    
    public function show($id){

        $employee = Employee::find($id);
        return view('employee.show', compact('employee'));
    }

    public function destroy($id){

        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.all')->with('success', 'Employee Successfully Removed');
    }
    
    
    public function edit($id){

        $employee = Employee::find($id);

        return view('employee.edit', compact('employee'));

    }

    public function update(Request $request, $id){

        $this->validate($request, [

            'employeeID'=> 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'designation' => 'required',
            'first_name'=> 'required',
            'last_name' => 'required',
        ]);

        $child = Employee::find($id);

       

        $child->update([

            'employeeID'  => $request->employeeID,
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'designation' => $request->designation,
        ]);

        return redirect()->route('employee.all')->with('success', 'Employee Successfully Updated');

        


    }



}

