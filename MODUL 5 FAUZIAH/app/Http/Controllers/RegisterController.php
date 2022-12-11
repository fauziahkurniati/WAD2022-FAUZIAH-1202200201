<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_fauziah;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register',[
            'title' => 'Register Page',
        ]);
    }
    public function registeruser(Request $request)
    {
        user_fauziah::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp,
            'level' => 2,
        ]);
        // $request->session()->flash('success','Registrasi Berhasil! silahkan login kembali');
        return redirect('/login')->with('success','Registrasi Berhasil! silahkan login kembali');
    }
}
