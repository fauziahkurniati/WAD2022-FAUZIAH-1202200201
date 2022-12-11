<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\showroom;

class CrudController extends Controller
{
    public function index()
    {
        $showroom = showroom::all();
        return view('mycar.mycar', compact(['showroom']));
    }
    public function tambahmobil(Request $request)
    {
        showroom::create($request->all());

        return redirect('/mycar');
    }
    public function detail($id)
    {
        $car = showroom::where('id',$id)->first();
        
        return view('mycar.detail', compact('showroom'));
    }
    public function delete($id)
    {
        $showroom = showroom::find($id);
        $showroom->delete();
        
        return redirect()->route('mycar')->with('success','Data Berhasil di Hapus');
    }
}
