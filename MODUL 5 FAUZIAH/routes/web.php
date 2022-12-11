<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/add', function () {
    return view('mycar/add',[
        "title" => "Add Car"
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/loginproses', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('level');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/registeruser', [RegisterController::class, 'registeruser']);
Route::get('/hal2', function () {
    return "halaman 2";
});
Route::post('/tambahmobil',[CrudController::class, 'tambahmobil']);
Route::get('/mycar',[CrudController::class, 'index']);
Route::get('/detail/{id}',[CrudController::class, 'detail']);
Route::get('/delete/{id}',[CrudController::class, 'delete'])->name('delete');
