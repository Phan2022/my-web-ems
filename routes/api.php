<?php

use App\Http\Controllers\Api\ProvinceApiController;
use App\Http\Controllers\Api\DistrictApiController;
use App\Http\Controllers\Api\VillageApiController;
use App\Http\Controllers\Api\PositionApiController;
use App\Http\Controllers\Api\DepartmentApiController;
use App\Http\Controllers\Api\EmployeeApiController;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\ProvinceApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/provinceapi',ProvinceApiController::class);
Route::resource('/districtapi',DistrictApiController::class);
Route::resource('/villageapi',VillageApiController::class);
Route::resource('/positionapi',PositionApiController::class);
Route::resource('/departmentapi',DepartmentApiController::class);
Route::resource('/employeeapi',EmployeeApiController::class);
