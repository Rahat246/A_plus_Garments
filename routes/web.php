<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CSR1Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auditController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProductController;

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
Route::post('contact/submit',[frontController::class,'submit'])->name('submit.contract');

Route::get('/front-buyer',[frontController::class,'buyer'])->name('front.buyer');
Route::get('/front-csr',[frontController::class,'csr'])->name('front.csr');
Route::get('/front-about',[frontController::class,'about'])->name('front.about');

Route::get('admin-login',[AuthController::class,'loginform'])->name('admin.login');
Route::post('/login-submit',[AuthController::class,'loginSubmit'])->name('login.submit');
Route::group(['middleware'=>'auth'],function(){
    Route::middleware('checkAdmin')->group (function(){

        Route::get('/backend-admin',[AdminController::class,'admin'])->name('backend.admin');
        Route::get('/backend-adminpage',[AdminController::class,'adminpage'])->name('admin.page');
        Route::get('/backend-create',[AdminController::class,'create'])->name('admin.create');
        Route::post('/create-store',[AdminController::class,'store'])->name('create.store');
        Route::get('/admin-gallery',[AdminController::class,'admingallery'])->name('admin.gallery');
        Route::get('/admin-delete/{id}',[AdminController::class,'adminDelete'])->name('admin.delete');
        Route::get('/admin-edit/{id}',[AdminController::class,'adminEdit'])->name('admin.edit');
        Route::put('/admin-update/{id}',[AdminController::class,'adminUpdate'])->name('admin.update');
        
        
        Route::get('/audit-create',[auditController::class,'audit'])->name('audit.create');
        Route::post('/audit-store',[auditController::class,'store'])->name('audit.store');
        Route::get('/audit-list',[auditController::class,'auditlist'])->name('audit.list');
        Route::get('/audit-delete/{id}',[auditController::class,'auditDelete'])->name('audit.delete');
        Route::get('/audit-edit/{id}',[auditController::class,'auditEdit'])->name('audit.edit');
        Route::put('/audit-update/{id}',[auditController::class,'auditUpdate'])->name('audit.update');
        
        
        Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
        Route::get('/product-create/form',[ProductController::class,'productCreate'])->name('product.create');
        Route::Post('/product-submit',[ProductController::class,'productSubmit'])->name('product.submit');
        Route::get('/product-delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');
        Route::get('/product-edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
        Route::put('/product-update/{id}',[ProductController::class,'productUpdate'])->name('product.update');
        
        
        Route::get('/csr-create',[CSR1Controller::class,'csrcreate'])->name('csr.create');
        Route::post('/csr-store',[CSR1Controller::class,'csrstore'])->name('csr.store');
        Route::get('/csr-list',[CSR1Controller::class,'csrlist'])->name('csr.list');
        
        Route::get('contact-list',[frontController::class,'contactlist'])->name('contact.list');
        
        
        
        
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');
        });
});

