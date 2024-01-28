<?php

use App\Http\Controllers\AitController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('insert',[AitController::class,'insert_form']);
Route::post('insert',[AitController::class,'insert']);

Route::get('list',[AitController::class,'list']);

Route::get('update/{id}',[AitController::class,'edit']);
Route::post('update/{id}',[AitController::class,'update']);

Route::get('delete/{id}',[AitController::class,'delete']);
