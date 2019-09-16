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
}
