<?php

use App\Http\Controllers\Api\SlideShowController;
use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserMenuController;
use App\Http\Controllers\Api\FooterController;
use App\Http\Controllers\Api\SubFooterController;
use App\Http\Controllers\Api\SubgroupController;
use App\Http\Controllers\Api\SubeventController;
use App\Http\Controllers\Api\EventIntrduceController;
use App\Models\EventIntroduce;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all-user',[UserController::class,'index']);//Lấy danh sách users với api

Route::get('/user-id/{id}',[UserController::class,'show']);//Tìm user với api

Route::get('/all-menu',[UserMenuController::class,'index']); //Lấy danh sách menu

Route::get('/all-footer',[FooterController::class,'index']);//Lấy danh sách footer với api

Route::get('/subfooter/{id}',[SubFooterController::class,'show']);//Lấy danh sách subfooter với api
Route::get('/slides',[SlideShowController::class, 'index']);
Route::get('/all-subgroup',[SubgroupController::class,'index']);//Lấy danh sách các cotegories
Route::get('/all-cars',[CarsController::class,'index']);
Route::get('/all-subevent',[SubeventController::class,'index']);// lấy ra danh sách các navbar trang event
