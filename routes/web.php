<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudenController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [CustomerController::class, 'index'])->name('home');


Route::get('/add-student',[StudenController::class,'addStudent'])->name('add');
Route::post('/store-student',[StudenController::class,'storeStudent'])->name('store');


Route::get('customarAdd',[CustomerController::class,'customerAdd'])->name('customerAdd');
Route::post('customerStore',[CustomerController::class,'customerStore'])->name('customerStore');
Route::get('customerEdit/{id}',[CustomerController::class,'customerEdit'])->name('customerEdit');
Route::put('customerUpdate/{id}',[CustomerController::class,'customerUpdate'])->name('customerUpdate');
Route::delete('customerDelete',[CustomerController::class,'customerDelete'])->name('customerDelete');





Route::get('main', function () {
    return view('master.main');
});
