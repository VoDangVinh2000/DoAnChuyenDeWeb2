<?php

use App\Http\Controllers\Api\BannerMuseumControlle;
use App\Http\Controllers\Api\BeforeRecentLeftControlle;
use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\FooterController;
use App\Http\Controllers\Api\HistoryMecRightControlle;
use App\Http\Controllers\Api\ImageBeforePhotosControlle;
use App\Http\Controllers\Api\ImageRecentControlle;
use App\Http\Controllers\Api\MecBenzHoursntroControlle;
use App\Http\Controllers\Api\MenuMuseumControlle;
use App\Http\Controllers\Api\SlidesCarouselController;
use App\Http\Controllers\Api\SlideShowController;
use App\Http\Controllers\Api\SubFooterController;
use App\Http\Controllers\Api\SubgroupController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserMenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/all-user', [UserController::class, 'index']); //Lấy danh sách users với api

Route::get('/user-id/{id}', [UserController::class, 'show']); //Tìm user với api

Route::get('/all-menu', [UserMenuController::class, 'index']); //Lấy danh sách menu

Route::get('/all-footer', [FooterController::class, 'index']); //Lấy danh sách footer với api

Route::get('/subfooter/{id}', [SubFooterController::class, 'show']); //Lấy danh sách subfooter với api
Route::get('/slides', [SlideShowController::class, 'index']);
Route::get('/all-subgroup', [SubgroupController::class, 'index']); //Lấy danh sách các cotegories
Route::get('/all-cars', [CarsController::class, 'index']);

/*  API PAGE MUSEM & HISTORY  */
Route::get('/banner-museum', [BannerMuseumControlle::class, 'index']);
Route::get('/before-recent-museum', [BeforeRecentLeftControlle::class, 'index']);
Route::get('/history-mec-museum', [HistoryMecRightControlle::class, 'index']);
Route::get('/image-photos-museum', [ImageBeforePhotosControlle::class, 'index']);
Route::get('/image-recent-museum', [ImageRecentControlle::class, 'index']);
Route::get('/mecbenz-hours-museum', [MecBenzHoursntroControlle::class, 'index']);
Route::get('/menu-museum', [MenuMuseumControlle::class, 'index']);
Route::get('/slides-carousel-museum', [SlidesCarouselController::class, 'index']);