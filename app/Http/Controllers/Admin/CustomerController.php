<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\ClientRecord;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRecordNotification;

class CustomerController extends Controller
{
    public function index(){
    	$customers = ClientRecord::latest()->get();
    	return view('admin.customer', compact('customers'));
    }

    public function show($id){

    	$client = ClientRecord::find($id);

    	return view('admin.show_customer', compact('client') );

    }    

    public function edit($id){

    	$client = ClientRecord::find($id);

    	return view('admin.edit_customer', compact('client') );

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'clients_name'  =>  'required',
            'cp_name'       =>  'required',
            'cp_phone'      =>  'required',
            'cp_email'      =>  'required|email',
            'prospective'   =>  'required',
            'brief'         =>  'required',
            'employeeID'    =>  'required'
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
            'submission_ppt_tech'               =>  $request->submission_ppt_tech,
            'submission_fainancial_quotation'   =>  $request->submission_fainancial_quotation,
            'submission_ppt_with_sample'        =>  $request->submission_ppt_with_sample,
            'submission_with_quotation'         =>  $request->submission_with_quotation,
            'submission_other'                  =>  $request->submission_other,
            'work_event'       =>  $request->work_event,
            'work_activation'  =>  $request->work_activation,
            'work_gift_item'   =>  $request->work_gift_item,

        ]);

        return redirect()->route('admin.customer.show', $child->id)->with('success', 'Data Successfully Updated');

    }
}

