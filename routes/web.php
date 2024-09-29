<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;

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
    return view('login');
});
Route::resource('/login', LoginController::class);

Route::group(['middleware'=>'adminlogin'], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::get('/employee/print/{id}',[EmployeeController::class, 'print']) ->name('employee.print');

    Route::get('/employee/printcart/{id}',[EmployeeController::class, 'printcart']) ->name('employee.printcart');

    Route::get('/report-emp',[ReportController::class, 'index']) ->name('report-emp.index');
    Route::get('/report-emp/print',[ReportController::class, 'print']) ->name('report-emp.print');
    Route::get('/user/print/{id}',[UserController::class, 'print']) ->name('user.print');
    
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/province', ProvinceController::class);
    Route::resource('/district', DistrictController::class);
    Route::resource('/village', VillageController::class);
    Route::resource('/department', DepartmentController::class);
    Route::resource('/position', PositionController::class);
    Route::resource('/status', StatusController::class);

    Route::resource('/user', UserController::class);
    Route::resource('/role', RoleController::class);
    
});

Route::get('logut',[LoginController::class, 'logout'])->name('logout');