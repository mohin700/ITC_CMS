<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\ClientRecord;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRecordNotification;

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
            'submission_date'  =>  'required',
            'employeeID'       => 'required',
        ]);


        $records = ClientRecord::create([
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
            'work_gift_item'   =>  $request->work_activation,
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


        if ($records->id){

            $mailadress = [

                'planning'  => 'mohin700@gmail.com',
                'creative'  => 'mohin.pro@gmail.com',
                'operation' => 'mohin700@gmail.com',
                'accounts'  => 'mohin700@gmail.com',
                'hr'        => 'mohin700@gmail.com',
                'admin'     => 'mohin700@gmail.com',
                'it'        => 'mohin700@gmail.com',
                'other'     => 'mohin700@gmail.com',
            ];


            if ($records->dep_planning == 'on') {
                Mail::to($mailadress['planning'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_creative == 'on') {
                Mail::to($mailadress['creative'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_operation == 'on') {
                Mail::to($mailadress['operation'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_accounts == 'on') {
                Mail::to($mailadress['accounts'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_hr == 'on') {
                Mail::to($mailadress['hr'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_admin == 'on') {
                Mail::to($mailadress['admin'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_it == 'on') {
                Mail::to($mailadress['it'])->send(new NewRecordNotification($records));
            }
            if ($records->dep_Other == 'on') {
                Mail::to($mailadress['other'])->send(new NewRecordNotification($records));
            }
            

            return redirect()->route('welcome')->with('success', 'Client Visit Report Successfully Submitted');
        }else{

            return redirect()->route('welcome')->with('error', 'Something Went Wrong, Please enter valaid info');
        }

    }
}
