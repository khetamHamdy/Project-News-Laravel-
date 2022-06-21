<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function authenticate_login(Request $request)
    {
        //dd($request->toArray());
        $Data_Login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($Data_Login)) {
            return redirect()->route('post.index');
        }
        return redirect()->back()->with('error', 'The Vailed Users');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('login');
    }

    public function Registration()
    {
        return view('Auth.registration');
    }

    public function RegistrationSave(Request $request)
    {
        //dd($request->toArray());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]);

        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]
        );
        return redirect()->route('login')->with('success' , 'The User Created');
    }
}
