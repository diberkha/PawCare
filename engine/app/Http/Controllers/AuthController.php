<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if(Auth::attempt($data)){
            return redirect('/home');
        }else{
            Session()->flash('error', 'Email atau Password Salah');
            return back();
        }
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        if ($request->password !== $request->confirmPassword) {
            Session()->flash('error', 'Konfirmasi Password Tidak Sama');
            return back();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'user';
        $user->country = $request->country;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();

        Auth::login($user);
        
        event(new Registered($user));

        return redirect ('/email-verify');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pawcare.home');
    }
}
