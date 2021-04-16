<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Admin;
use App\Models\admin\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.user.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create' ,compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password=  bcrypt($request->password);
        $admin->phone = $request->phone;
        $admin->status = $request->status;
        $admin->save();
        $admin->roles()->sync($request->role);
        return redirect()->back()->with('success' , 'Added New Admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        $roles = Role::all();
        return view('admin.user.edit' ,compact('admin','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        // $validationData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'status' => 'required',


        // ]);
        $admin = Admin::find($id);

        if(empty($request->status))
        {
            $status = $request['status'] = 0;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->status = $status;
            $admin->roles()->sync($request->role);
            $admin->save();
            
        }else
        {
            $request['status'] = 1;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->status = $status;
            $admin->roles()->sync($request->role);
            $admin->save();
        }

        

        return redirect()->back()->with('success' , 'Update Admin Successfully');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->back()->with('success' , 'Deleted Admin Successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
