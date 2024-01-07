<?php

use App\Http\Controllers\DoctorsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name('home');
Route::get('/doctors',[DoctorsController::class, 'index'])->name('doctors');
Route::get('/doctor/create',[DoctorsController::class, 'create'])->name('doctors.create'); 
Route::post('/doctors',[DoctorsController::class, 'store'])->name('doctors.store');
Route::get('/doctor/{doctor}',[DoctorsController::class, 'show']);
Route::view('/patients', 'patients')->name('patients');