<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ClientRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('client_records')->insert([
    		'employee_id'	=>	1,
    		'clients_name'	=>	'Karam Group',
    		'cp_name'		=>	'Karim Talukder',
    		'cp_phone'		=>	'123456789',
    		'cp_email'		=>	'karim@test.com',
    		'prospective'	=>	'Business',
    		'brief'			=>	'fasojhoaijf oiaw jroiajf aw roiawjroijqw roiqwjr ',
    		'submission_type'	=>	'Financial Quotation',
    		'work_type'	 		=>	'Activation',
    		'submission_date'	=>	'2019-09-17',
    		'dep_planning'	=>	'on',
    		'dep_creative'	=>	'on',
            'created_at' 	=>  Carbon::now(),
            'updated_at' 	=>  Carbon::now(),
        ]);

         DB::table('client_records')->insert([
    		'employee_id'	=>	2,
    		'clients_name'	=>	'Hasan Group',
    		'cp_name'		=>	'Hasan khan',
    		'cp_phone'		=>	'123456789',
    		'cp_email'		=>	'khan@test.com',
    		'prospective'	=>	'Business',
    		'brief'			=>	'fasojhoaijf oiaw jroiajf aw roiawjroijqw roiqwjr ',
    		'submission_type'	=>	'Financial Quotation',
    		'work_type'	 		=>	'Activation',
    		'submission_date'	=>	'2019-09-17',
    		'dep_operation'	=>	'on',
    		'dep_accounts'	=>	'on',
            'created_at' 	=>  Carbon::now(),
            'updated_at' 	=>  Carbon::now(),
        ]);

         DB::table('client_records')->insert([
    		'employee_id'	=>	2,
    		'clients_name'	=>	'Rahai Group',
    		'cp_name'		=>	'Rahoim Mia',
    		'cp_phone'		=>	'123456789',
    		'cp_email'		=>	'mia@test.com',
    		'prospective'	=>	'Development',
    		'brief'			=>	'fasojhoaijf oiaw jroiajf aw roiawjroijqw roiqwjr ',
    		'submission_type'	=>	'Financial Quotation',
    		'work_type'	 		=>	'Activation',
    		'submission_date'	=>	'2019-09-17',
    		'dep_Other'		=>	'on',
    		'dep_admin'		=>	'on',
            'created_at' 	=>  Carbon::now(),
            'updated_at' 	=>  Carbon::now(),
        ]);
    }
}
