<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::paginate(4);
        return view('admins.index',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin = Admin::all();
        return view('admins.create',compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->name = $request->adminName;
        $admin->email = $request->adminEmail;
        $admin->password = $request->adminPassword;
        $admin->save();
        return redirect('/login-ad');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->name = $request->adminName;
        $admin->email = $request->adminEmail;
        $admin->password = $request->adminPassword;
        $admin->update();
        return redirect('/login-ad');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $admin = Admin::findOrFail($id);
         $admin->delete();
        return redirect('/login-ad');
    }
}