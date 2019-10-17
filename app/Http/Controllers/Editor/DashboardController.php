<?php

namespace App\Http\Controllers\Editor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClientRecord;

class DashboardController extends Controller
{
    public function index(){
    	$customers = ClientRecord::all();
    	return view('editor.dashboard', compact('customers'));
    }

    public function show($id){

    	$client = ClientRecord::find($id);

    	return view('editor.show', compact('client') );

    }    

    public function edit($id){

    	$client = ClientRecord::find($id);

    	return view('editor.edit', compact('client') );

    }

    public function update(Request $request, $id){

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

        $child = ClientRecord::find($id);


        $child->update([

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

        return redirect()->route('editor.dashboard')->with('success', 'Data Successfully Updated');

        


    }
}
