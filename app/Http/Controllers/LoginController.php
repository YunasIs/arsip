<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('/',[
            'title' => 'Login Page'
        ]);
    }

    public function profile(){
        return view('/admin.profile',[
            'title' => 'Profile'
        ]);
    }

    public function auth(Request $request){
        $credentials = $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
            return redirect("/")->withSuccess('Login details are not valid');

    }

    public function register(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => Hash::make($data['password'])
      ]);
    }    

    public function dashboard()
    {
         
        if(Auth::check()){
            // $user = Auth::user()->username;
            return view('/dashboard',[
                'title' => 'Dahsboard'
            ]);
        }
  
        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}