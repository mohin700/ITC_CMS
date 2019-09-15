<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereIn('role_id', [1, 2, 3])->get();

        return view('admin.allusers', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [

            'role'      => 'required',
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|confirmed',

        ]);


        User::create([
            'name'      => $request->name,
            'role_id'   => $request->role,
            'email'     => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        return back()->with('success', 'User successfully created');

    }

}
