<?php

use App\Http\Controllers\DistributorController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Models\Distributor;
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

    Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard','dashboard')->name('dashboard');

        Route::get('/admin','admin')->name('admin.register')->middleware('superUser');

        Route::post('/admin/store','store')->name('admin.store');

        Route::get('/admin/show','show')->name('admin.show')->middleware('superUser');

        Route::get('/admin/data/{user}','view')->name('admin.view');

        Route::get('/admin/edit/{user}','edit')->name('admin.edit');

        Route::put('/admin/update/{user}','update')->name('admin.update');

        Route::delete('/admin/{user}','delete')->name('admin.delete');

        Route::get('/admin/profile','userprofile')->name('admin.profile');

        Route::get('/admin/profile/reset','reset')->name('admin.reset');

        Route::put('/admin/profile/password','resetPassword')->name('admin.resetPassword');

        Route::get('/logout','logout')->name('logout');
    });

    Route::controller(DistributorController::class)->group(function () {
        Route::get('/distributor','register')->name('distributor.register');

        Route::post('/distributor/store','store')->name('distributor.store');

        Route::get('/distributor/data','show')->name('distributor.show');

        Route::get('/distributor/suspended','suspended')->name('distributor.suspended');

        Route::get('/distributor/data/{distributor}','view')->name('distributor-data.view');

        Route::get('/distributor/edit/{distributor}','edit')->name('distributor.edit');

        Route::put('/distributor/update/{distributor}','update')->name('distributor.update');

        Route::delete('/distributors/{distributor}','delete')->name('distributor.delete');

        Route::delete('/distributor/suspended/{distributor}','delete')->name('distributor.delete.suspended');

    });

    Route::controller(StaffController::class)->group(function() {
        Route::get('/staff','staff')->name('staff.register');

        Route::post('/staff/store','store')->name('staff.store');

        Route::get('/staff/data','show')->name('staff.show');

        Route::get('/staff/casual','casual')->name('staff.casual');

        Route::get('staff/data/{staff}','view')->name('staff.data.view');

        Route::get('staff/edit/{staff}','edit')->name('staff.edit');

        Route::put('staff/update/{staff}','update')->name('staff.update');

        Route::delete('staff/{staff}','delete')->name('staff.delete');

        Route::delete('staff/casual/{staff}','delete')->name('staff.delete.casual');

    });

});

Route::post('/authenticate',[UserController::class,'authenticate'])->name('authenticate')->middleware('guest');

Route::get('/status/{email}',[UserController::class,'updateStatus']);

Route::get('/',[UserController::class,'index'])->name('login');


