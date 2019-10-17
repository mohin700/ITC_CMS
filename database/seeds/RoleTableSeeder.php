<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert([
       		'title'			=>	'Admin',
       		'slug'			=>	'admin',
       		'level'			=>	1,
           	'created_at'	=>  Carbon::now(),
           	'updated_at'	=>  Carbon::now(),
       ]);       

       DB::table('roles')->insert([
       		'title'			=>	'Editor',
       		'slug'			=>	'editor',
       		'level'			=>	2,
           	'created_at'	=>  Carbon::now(),
           	'updated_at'	=>  Carbon::now(),
       ]);

       DB::table('roles')->insert([
       		'title'			=>	'Viewer',
       		'slug'			=>	'viewer',
       		'level'			=>	3,
           	'created_at'	=>  Carbon::now(),
           	'updated_at'	=>  Carbon::now(),
       ]);
    }
}
