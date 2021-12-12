<?php

use App\Http\Controllers\FooterController;
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
//tạo route login
Route::get('/', function () {
    return redirect('/cars-home');
});

/* Hiển thị giao diện register */
Route::get('/register', function () {
    return view('layouts.auth.register');
});

Route::get('/login', function () {
    return view('layouts.auth.login');
});

/* Lấy ID user */
Route::get('/edit/{id}', function () {
    return view('app.edituser');
});

Route::fallback(function () {
    return redirect('/cars-home');
});
Route::post('register_test', [UserController::class, 'store'])->name('register.store'); //tạo route để gửi dữ liệu qua UserController
Route::post('/login', [UserController::class, 'login']);
Route::get('/home', [UserController::class, 'index']);
Route::post('/edit-user/{id}', [UserController::class, 'update']); //xử lý User tại hàm update thuộc file UserController
Route::post('/delete/{id}', [UserController::class, 'destroy']);

//cars
Route::get('/cars-home', function () {
    return view('layouts.carshome');
});

Route::get('/innovation', function () {
    return view('app.Pages.innovation');
});
Route::get('/events', function () {
    return view('app.Pages.events');
});

//page-design
Route::get('/design', function () {
    return view('app.Pages.design');
});
//Museums & History
Route::get('/museums-history', function () { //index.js
    return view('app.Pages.museumshistory'); //museumshistory.balde.php
});
// Tạo route cho page Company About us
Route::get('/company', function () {
    return view('app.Pages.company');
});

//Admin
Route::get('/admin/innovation', function () {
    return view('app.Admin.Layouts.Innovation.Innovation');
});

//  list Footer
// Route::get('/admin/subfooter', function () {
//     return view('app.Admin.Layouts.SubFooter.SubFooter');
// });

// Route::get('/subfooter/add-subfooter', function () {
//     return view('app.Admin.Layouts.SubFooter.Add-SubFooter');
// });

// Route::get('/update-subfooter/{id}', function () {
//     return view('app.Admin.Layouts.SubFooter.Update-SubFooter');
// });

// Route::post('/create-subfooter', [SubFooterController::class, 'store'])->name('addSubFooter.store');
// Route::post('/update-subfooter/{id}', [SubFooterController::class, 'update']);
// Route::post('/delete-subfooter/{id}', [SubFooterController::class, 'destroy']);
Route::get('/admin/footer', function () {
    return view('app.Admin.Layouts.Footer.Footer');
});

Route::get('/footer/add-footer', function () {
    return view('app.Admin.Layouts.Footer.Add-Footer');
});

Route::get('/update-footer/{id}', function () {
    return view('app.Admin.Layouts.Footer.Update-Footer');
});

Route::post('/create-footer', [FooterController::class, 'store'])->name('addFooter.store');
Route::post('/update-footer/{id}', [FooterController::class, 'update']);
Route::post('/delete-footer/{id}', [FooterController::class, 'destroy']);