<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login',[
            'title'=>"Login"
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/')->with('Success','Login berhasil');
        }
        return back()->with('Gagal','Login anda gagal');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
