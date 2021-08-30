<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\SkilController;



Route::get('/', function () {
    return view('home');
})->middleware('checkAuth')->name('home');



Route::get('/login', [UserController::class, 'login'])->middleware('loginAuth');
Route::post('/login', [UserController::class, 'loginpost']);
Route::get('/register', [UserController::class, 'register'])->middleware('loginAuth');
Route::post('/register', [UserController::class, 'registerpost']);

Route::get('/download_cv', [UserController::class, 'cv_maker'])->name('download_cv')->middleware('checkAuth');
Route::get('/download_pdf', [UserController::class, 'download_pdf'])->middleware('checkAuth');

Route::get('/profile', [UserController::class, 'profile'])->middleware('checkAuth')->name('profile');

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/update_login', [ProfileController::class, 'logindet'])->middleware('checkAuth');
Route::post('/update_login', [ProfileController::class, 'update_logindet']);


Route::get('/update_profile', [ProfileController::class, 'profiledet'])->middleware('checkAuth');
Route::post('/update_profile', [ProfileController::class, 'update_profiledet']);
Route::get('/edit_profile/{id}', [ProfileController::class, 'edit_profiledet'])->middleware('checkAuth');
Route::post('/edit_profile/{id}', [ProfileController::class, 'submit_updated_profiledet']);



Route::get('/work', [WorkController::class, 'work'])->middleware('checkAuth');
Route::post('/work', [WorkController::class, 'postwork']);
Route::get('/edit_work/{id}', [WorkController::class, 'edit_work'])->middleware('checkAuth');
Route::post('/edit_work/{id}', [WorkController::class, 'edit_postwork']);
Route::get('/delete_work/{id}', [WorkController::class, 'delete_postwork']);



Route::get('/skil', [SkilController::class, 'skil'])->middleware('checkAuth')->middleware('checkAuth');
Route::post('/skil', [SkilController::class, 'postskil']);
Route::get('/edit_skil/{id}', [SkilController::class, 'edit_skil'])->middleware('checkAuth');
Route::post('/edit_skil/{id}', [SkilController::class, 'edit_postskil']);
Route::get('/delete_skil/{id}', [SkilController::class, 'delete_postskil']);


Route::get('/education', [EducationController::class, 'education'])->middleware('checkAuth');
Route::post('/education', [EducationController::class, 'postedu']);
Route::get('/edit_education/{id}', [EducationController::class, 'edit_edu'])->middleware('checkAuth');
Route::post('/edit_education/{id}', [EducationController::class, 'edit_postedu']);
Route::get('/delete_education/{id}', [EducationController::class, 'delete_postedu']);


Route::get('/social_links', [LinkController::class, 'link'])->middleware('checkAuth');
Route::post('/social_links', [LinkController::class, 'postlink']);
Route::get('/edit_links/{id}', [LinkController::class, 'edit_link'])->middleware('checkAuth');
Route::post('/edit_links/{id}', [LinkController::class, 'edit_postlink']);
