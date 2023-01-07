<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Admin;
use Hash;
use Illuminate\Support\Str;
use Auth;


class AdminAuthController extends Controller
{
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login()
    {
        return view('admin.auth.login');
    }  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("admin/login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
   
    public function index()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }
  
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }
   
}
