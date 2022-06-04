<?php

use App\Http\Controllers\DistributorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
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


Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');

    Route::get('/admin',[UserController::class,'admin'])->name('admin.register');

    Route::post('/admin/store',[UserController::class,'store'])->name('admin.store');

    Route::get('/admin/show',[UserController::class,'show'])->name('admin.show');

    Route::delete('/admin/{user}',[UserController::class,'delete'])->name('admin.delete');

    Route::get('/logout',[UserController::class,'logout'])->name('logout');

    Route::get('/distributor',[DistributorController::class,'register'])->name('distributor.register');

    Route::post('/distributor/store',[DistributorController::class,'store'])->name('distributor.store');

    Route::get('/distributor/data',[DistributorController::class,'show'])->name('distributor.show');

    Route::get('/distributor/suspended',[DistributorController::class,'suspended'])->name('distributor.suspended');

    Route::delete('/distributors/{distributor}',[DistributorController::class,'delete'])->name('distributor.delete');

    Route::get('/staff',[StaffController::class,'staff'])->name('staff.register');

    Route::post('/staff/store',[StaffController::class,'store'])->name('staff.store');

    Route::get('/staff/data',[StaffController::class,'show'])->name('staff.show');

    Route::get('/staff/casual',[StaffController::class,'casual'])->name('staff.casual');

    Route::delete('staffs/{staff}',[StaffController::class,'delete'])->name('staff.delete');


});

Route::post('/authenticate',[UserController::class,'authenticate'])->name('authenticate')->middleware('guest');

Route::get('/',[UserController::class,'index'])->name('login');



