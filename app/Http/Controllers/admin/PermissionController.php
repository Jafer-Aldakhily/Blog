<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Permission;
use Illuminate\Support\Facades\DB;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.index' ,compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request; 
        $validationData = $request->validate([
            'name' => 'required|unique:permissions',
            'for' => 'required',
        ],[

            'name.unique' => 'The role name is unique'
        ]);


        $permission = new Permission();
        $permission->name = $request->name;
        $x = $permission->for = $request->for;   
        $permission->save();
        return redirect()->back()->with('success' , 'Inserted Permission Successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        // $not_selected = DB::table('permissions')->cloneWithout($permission->id);
        // return $not_selected;
        return view('admin.permission.edit' ,compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $validationData = $request->validate([
            'name' => 'required|unique:permissions',
             'for' => 'required',
        ],[

            'name.unique' => 'The role name is unique'
        ]);

        $permission->name = $request->name;
        $permission->for = $request->for;
        $permission->save();
        return redirect()->back()->with('success' , 'Updated Permission Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->back()->with('success' ,'Deleted Role Successfully');
        
    }
}
