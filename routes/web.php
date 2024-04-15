<?php

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

Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies');

Route::get('/add-order', [App\Http\Controllers\OrderController::class, 'create'])->name('add-order');
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/register-company',[App\Http\Controllers\CompanyController::class, 'create'])->name('register-company');

Route::post('/registerCompany',[App\Http\Controllers\CompanyController::class, 'store']);

