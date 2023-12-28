<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
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



Route::get('/front-master',[frontController::class,'master']);
Route::get('/',[frontController::class,'frontpage'])->name('front.frontpage');
Route::get('/front-gallery',[frontController::class,'gallery'])->name('front.gallery');
Route::get('/front-audit',[frontController::class,'audit'])->name('front.audit');
Route::get('/front-contract',[frontController::class,'contract'])->name('front.contract');
Route::get('/front-buyer',[frontController::class,'buyer'])->name('front.buyer');
Route::get('/front-csr',[frontController::class,'csr'])->name('front.csr');
Route::get('/front-about',[frontController::class,'about'])->name('front.about');
