<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\user\User;

class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }



    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:c_pass|min:8',
            'c_pass' => 'required|min:8'
        ]);
        $password = bcrypt($request['password']);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();
        return redirect()->route('/');
    }

    
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // $request['password'] = bcrypt($request->password);
        $credentials = $request->only('email' , 'password');
        if(Auth::attempt($credentials))
        {
            return redirect()->route('/');
        }else
        {
            return redirect()->back()->with('faild' , 'Invalid email or password');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
         Session::flush();
         Auth::logout();

         return Redirect()->route('login');

    }
}
