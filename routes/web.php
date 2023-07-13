<?php

use App\Http\Controllers\EmployeeController;
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
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->prefix('employee')->name('employee.')->group(function () {
    Route::get('/create',[EmployeeController::class,'create'])->name('create');
    Route::post('/store',[EmployeeController::class,'store'])->name('store');
    Route::get('/list', [EmployeeController::class,'index'])->name('index');
    Route::get('/{employee}',[EmployeeController::class,'destroy'])->name('destroy');
    Route::get('/edit/{employee}',[EmployeeController::class,'edit'])->name('edit');
    Route::patch('/update/{employee}',[EmployeeController::class,'update'])->name('update');
});
