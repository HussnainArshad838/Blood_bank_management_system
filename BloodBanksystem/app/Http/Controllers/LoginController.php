<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login.login');
    } 
    public function register()
    {
        return view('Login.signup');
    }
    public function verify(Request $request)
    {
        //dd($request->all());
        $credentials= $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (\Auth::attempt($request->only('email','password'))) {
            
                    return redirect()->intended('/bloodbank')
                                ->withSuccess('You have Successfully loggedin');
                                
                }
                
                return redirect("login")->withError('Oppes! You have entered invalid credentials');
            
    } 
    public function registration(Request $request)
    {
        //dd($request->all());
            $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            ]);
            User::create([

                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> \Hash::make($request->password),
            ]);
            if (\Auth::attempt($request->only('email','password'))) {
            
                return redirect()->intended('/bloodbank')
                            ->withSuccess('You have Successfully loggedin');
                            
            }
            
            return redirect("login")->withError('Oppes! You have entered invalid credentials');
        

    }
}
