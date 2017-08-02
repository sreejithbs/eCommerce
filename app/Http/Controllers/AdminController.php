<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    	$this->middleware('auth:admin');	//Specifying 'admin' guard
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('pages.backEnd.admins', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = Admin::create($request->input());
        return response()->json($admin);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($admin_id)
    {
        $admin = Admin::find($admin_id);
        return response()->json($admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $admin_id)
    {
        $admin = Admin::find($admin_id);
        $admin->firstName = $request->firstName;
        $admin->lastName = $request->lastName;
        $admin->type = $request->type;
        $admin->save();
        return response()->json($admin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($admin_id)
    {
        $admin = Admin::destroy($admin_id);
        return response()->json($admin);
    }

}
