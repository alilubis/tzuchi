<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('patient/dashboard');
});

// GET METHODS
Route::get('/patient',[PatientController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'show'])->name('login');
Route::get('/register',[PatientController::class,'register'])->name('patient');

// POST METHODS
Route::post('/patient/create',[PatientController::class,'create'])->name('create');
Route::post('/login',[LoginController::class,'handle'])->name('handle');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

// AUTH
Route::group(['middleware' => 'auth'], function(){
    Route::resource('patient', PatientController::class);
});
