<?php

use App\Http\Controllers\Api\BannerMuseumController;
use App\Http\Controllers\Api\BeforeRecentLeftController;
use App\Models\SectionArticlesPosts;
use App\Http\Controllers\Api\SubeventController;
use App\Http\Controllers\Api\EventIntrduceController;
use App\Models\EventIntroduce;
use App\Http\Controllers\Api\HistoryMecRightController;
use App\Http\Controllers\Api\ImageBeforePhotosController;
use App\Http\Controllers\Api\ImageRecentController;
use App\Http\Controllers\Api\MecBenzHoursntroController;
use App\Http\Controllers\Api\MenuMuseumController;
use App\Http\Controllers\Api\SlidesCarouselController;
use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\CategoryArticlePostController;
use App\Http\Controllers\Api\FooterController;
use App\Http\Controllers\Api\SectionArticlesPostsController;
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

Route::get('/user-id/{id}', [UserController::class, 'show']); //Tìm user với api

Route::get('/all-menu', [UserMenuController::class, 'index']); //Lấy danh sách menu

Route::get('/all-footer', [FooterController::class, 'index']); //Lấy danh sách footer với api

Route::get('/subfooter/{id}', [SubFooterController::class, 'show']); //Lấy danh sách subfooter với api
Route::get('/slides', [SlideShowController::class, 'index']);
Route::get('/all-subgroup', [SubgroupController::class, 'index']); //Lấy danh sách các cotegories
Route::get('/all-cars', [CarsController::class, 'index']);

#Api category-article-post
Route::get('/all-category-article-post-innovation', [CategoryArticlePostController::class, 'index'])->name('all-category-article-post-innovation');
Route::get('/section-article-post-innovation/{id}', [SectionArticlesPostsController::class, 'show'])->name('section-article-post-innovation-id');
//This route get all category_article_post data by menumain.id
Route::get('/category-article-post-innovation-menu-main-id/{id}',[CategoryArticlePostController::class,'show'])->name('category-article-post-innovation');

Route::get('/all-header',[CarsController::class,'index']);

Route::get('/all-menu-id/{id}',[UserMenuController::class,'show']);
Route::get('/all-subevent',[SubeventController::class,'index']);// api page event
/*  API PAGE MUSEM & HISTORY  */
Route::get('/banner-museum', [BannerMuseumController::class, 'index']);
Route::get('/before-recent-museum', [BeforeRecentLeftController::class, 'index']);
Route::get('/history-mec-museum', [HistoryMecRightController::class, 'index']);
Route::get('/image-photos-museum', [ImageBeforePhotosController::class, 'index']);
Route::get('/image-recent-museum', [ImageRecentController::class, 'index']);
Route::get('/mecbenz-hours-museum', [MecBenzHoursntroController::class, 'index']);
Route::get('/menu-museum', [MenuMuseumController::class, 'index']);
Route::get('/slides-carousel-museum', [SlidesCarouselController::class, 'index']);
Route::get('/category-article-post-innovation-menu-main-id/{id}', [CategoryArticlePostController::class, 'show'])->name('category-article-post-innovation');
//API Footer
Route::get('/get-footer-by-id/{id}', [FooterController::class, 'getFooterByID']);
Route::post('/create-footer', [FooterController::class, 'store'])->name('addFooter.store');
Route::post('/update-footer/{id}', [FooterController::class, 'update']);
Route::post('/delete-footer/{id}', [FooterController::class, 'destroy']);
