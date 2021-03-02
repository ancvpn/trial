<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Auth::routes();
//['verify' => true]

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route for the add employee
Route::get('/add_employee', [App\Http\Controllers\employeeController::class, 'index'])->name('add.employee');
//route for the all employee
Route::get('/all_employee', [App\Http\Controllers\employeeController::class, 'index'])->name('all.employee');
//route to insert data
Route::Post('/insert-post', [App\Http\Controllers\PostController::class, 'store']);

//Route::Post('/insert-employee' , 'employeeController@store');

// route for the add customer
Route::get('/add-customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('add.customer');
Route::post('/insert-customer', [App\Http\Controllers\CustomerController::class, 'store']);

Route::get('/all-customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('all.customer');
