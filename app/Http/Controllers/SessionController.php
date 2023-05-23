<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'wajib diisi',
            'password.required' => 'wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'user'){
                return redirect('/user');
            } elseif (Auth::user()->role == 'operator'){
                return redirect('/operator');
            }
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil logout');
    }
    public function register(){
        return view('register');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi'
        ]);

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ];
        User::create($user);
        return redirect('/login');
    }

}
