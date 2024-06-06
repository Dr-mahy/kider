<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Dashboard;
Route::get('/', function () {
    return view('test');
});
Route::get('dashboard', function () {
    return view('dashtest');
});
Route::get('home',[Home::class,'home'])->name('home');
Route::get('about',[Home::class,'about'])->name('about');
Route::get('class',[Home::class,'class'])->name('class');
Route::get('pages/facility',[Home::class,'facility'])->name('facility');
Route::get('pages/teams',[Home::class,'teams'])->name('teams');
Route::get('pages/beteacher',[Home::class,'beteacher'])->name('beteacher');
Route::get('pages/getappoint',[Home::class,'getappoint'])->name('getappoint');
Route::get('pages/testemon',[Home::class,'testemon'])->name('testemon');
Route::get('pages/error',[Home::class,'error'])->name('error');
Route::get('contact',[Home::class,'contact'])->name('contact');

Route::get('dashform',[Dashboard::class,'dashform'])->name('dashform');
Route::get('dashtable',[Dashboard::class,'dashtable'])->name('dashtable');
Route::get('register',[Dashboard::class,'register'])->name('register');
Route::get('login',[Dashboard::class,'login'])->name('login');
