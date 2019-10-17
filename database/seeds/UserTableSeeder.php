<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'role_id'	=>	'1',
            'name'      =>  'Sarder Mohiuddin',
        	'email'		=>	'admin@gmail.com',
        	'password'	=>	bcrypt('123456789'),
            'created_at'=>  Carbon::now(),
            'updated_at'=>  Carbon::now(),
        ]);

        DB::table('users')->insert([
        	'role_id'	=>	'2',
            'name'      =>  'Sakif',
        	'email'		=>	'editor@gmail.com',
        	'password'	=>	bcrypt('123456789'),
            'created_at'=>  Carbon::now(),
            'updated_at'=>  Carbon::now(),
        ]);

        DB::table('users')->insert([
        	'role_id'	=>	'3',
            'name'      =>  'Kamal',
        	'email'		=>	'viewer@gmail.com',
        	'password'	=>	bcrypt('123456789'),
            'created_at'=>  Carbon::now(),
            'updated_at'=>  Carbon::now(),
        ]); 
    }
}
