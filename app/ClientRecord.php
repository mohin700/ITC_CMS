<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Employee;


class ClientRecord extends Model
{
	protected $fillable = [
	    'clients_name', 'cp_name', 'cp_phone', 'cp_email', 'prospective', 'brief', 'submission_ppt_tech', 'submission_fainancial_quotation', 'submission_ppt_with_sample', 'submission_with_quotation', 'submission_other', 'work_event', 'work_activation', 'work_gift_item', 'submission_date', 'dep_planning', 'dep_creative', 'dep_operation', 'dep_accounts', 'dep_hr', 'dep_admin', 'dep_it', 'dep_Other', 'employee_id'
	];


    public function employee(){
    	
    	return $this->belongsTo(Employee::class);
    } 
}
