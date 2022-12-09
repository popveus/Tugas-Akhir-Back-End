<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;

Route::get('/home', function (){
    return view('home');
});

Route::get('/readuser',[BarangController::class, 'index'] )->name('readuser')->middleware('auth');


Route::get('/viewcreatedata',[BarangController::class, 'viewcreatedata'] )->name('viewcreatedata')->middleware('auth');

Route::post('/createdata',[BarangController::class, 'createdata'] )->name('createdata');


Route::get('/viewupdatedata/{id}',[BarangController::class, 'viewupdatedata'] )->name('viewupdatedata');

Route::post('/updatedata/{id}',[BarangController::class, 'updatedata'] )->name('updatedata');


Route::get('/delete/{id}',[BarangController::class, 'delete'] )->name('delete');


Route::get('/login',[LoginController::class, 'login'] )->name('login');

Route::post('/loginuser',[LoginController::class, 'loginuser'] )->name('loginuser');


Route::get('/register',[LoginController::class, 'register'] )->name('register');

Route::post('/registeruser',[LoginController::class, 'registeruser'] )->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');


//Route::get('/read',[BarangController::class, 'read'] )->name('read');
