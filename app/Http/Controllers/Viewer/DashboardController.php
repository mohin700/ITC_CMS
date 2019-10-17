<?php

namespace App\Http\Controllers\Viewer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClientRecord;

class DashboardController extends Controller
{
    public function index(){
    	$customers = ClientRecord::all();
    	return view('viewer.dashboard', compact('customers'));
    }

    public function show($id){

    	$client = ClientRecord::find($id);

    	return view('viewer.show', compact('client') );

    } 
}
