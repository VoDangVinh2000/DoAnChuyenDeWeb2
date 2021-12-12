<?php

use App\Http\Controllers\Api\SlideShowController;
use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\CategoryArticlePostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserMenuController;
use App\Http\Controllers\Api\FooterController;
use App\Http\Controllers\Api\SectionArticlesPostsController;
use App\Http\Controllers\Api\SubFooterController;
use App\Http\Controllers\Api\SubgroupController;
use App\Models\SectionArticlesPosts;

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

#Api category-article-post
Route::get('/all-category-article-post-innovation',[CategoryArticlePostController::class,'index'])->name('all-category-article-post-innovation');
Route::get('/section-article-post-innovation/{id}',[SectionArticlesPostsController::class,'show'])->name('section-article-post-innovation-id');
//This route get all category_article_post data by menumain.id
Route::get('/category-article-post-innovation-menu-main-id/{id}',[CategoryArticlePostController::class,'show'])->name('category-article-post-innovation');

Route::get('/all-header',[CarsController::class,'index']);

Route::get('/all-menu-id/{id}',[UserMenuController::class,'show']);
