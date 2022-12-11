<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user_fauziah;

class LoginController extends Controller
{
    public function index(){
        return view('login.login',[
            'title'=> 'Login'
        ]);
    }
    public function authenticate(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        
        // if(Auth::attempt(['email'=>$validated['email'],'password'=>$validated['password']])){
        //     if (Auth::user_fauziah()->level == 1) {
        //         // arahkan kehalaman admin
        //         return redirect()->route('index');
        //     } else if (Auth::user_fauziah()->level == 2) {
        //         // jika level 2
        //         // arahkan kehalaman order
        //         return redirect('/');
        //     }
            // $request->session()->regenerate();
        return back()->with('loginError','Login Gagal');

    }
}
