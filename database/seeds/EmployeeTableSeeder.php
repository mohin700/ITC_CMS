<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
       		'user_id'		  =>	1,
       		'employeeID'	=>	'123',
       		'email'			  =>	'123@gmail.com',
       		'phone'			  =>	'123456789',
       		'designation'	=>	'Marketere',
       		'first_name'	=>	'Hasan',
       		'last_name'	 	=>	'Ali',
           'created_at' =>  Carbon::now(),
           'updated_at' =>  Carbon::now(),
       ]);

        DB::table('employees')->insert([
       		'user_id'		  =>	1,
       		'employeeID'	=>	'1234',
       		'email'			  =>	'1234@gmail.com',
       		'phone'			  =>	'123456789',
       		'designation'	=>	'Marketere',
       		'first_name'	=>	'Kamal',
       		'last_name'	 	=>	'Vai',
          'created_at'  =>  Carbon::now(),
          'updated_at'  =>  Carbon::now(),
       ]);
    }
}
