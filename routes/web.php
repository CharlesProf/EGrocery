<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/', [HomeController::class, 'landingpage'])->middleware('guest');

Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login-check',[LoginController::class,'check'])->middleware('guest');
Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register-check',[RegisterController::class,'registerLogic'])->name('register-logic')->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/itemDetail/{id}',[ItemController::class, 'detailItem'])->middleware('auth');
Route::post('/buy/{id}', [OrderController::class, 'buy'])->middleware('auth');
Route::delete('/deleteCart/{id}', [OrderController::class, 'deleteCart'])->middleware('auth');
Route::post('/checkOut', [OrderController::class, 'cekOut'])->middleware('auth');
Route::get('/cart',[OrderController::class, 'showCart'])->middleware('auth');
Route::get('/berhasil',[OrderController::class, 'succ'])->middleware('auth');

Route::get('/profile/{id}',[ProfileController::class, 'index'])->middleware('auth');
Route::put('/updateProfile', [ProfileController::class, 'update'])->middleware('auth');
Route::get('/saved',[ProfileController::class, 'saved'])->middleware('auth');
Route::get('/maintenance/{id}', [ProfileController::class, 'maint'])->middleware('isAdmin');
Route::get('/updateRole/{id}', [ProfileController::class, 'showUpdate'])->middleware('isAdmin');
Route::patch('/updateAcc/{id}', [ProfileController::class, 'updateAcc'])->middleware('isAdmin');
Route::get('/deleteAcc/{id}', [ProfileController::class, 'delete'])->middleware('isAdmin');


Route::get('/addItem', [ItemController::class, 'addItem'])->middleware('isAdmin');
Route::post('/add', [ItemController::class, 'store'])->middleware('isAdmin');
Route::get('/editItem/{id}', [ItemController::class, 'editItem'])->middleware('isAdmin');
Route::put('/updateItem/{id}', [ItemController::class, 'update'])->middleware('isAdmin');
Route::get('/deleteItem/{id}', [ItemController::class, 'delete'])->middleware('isAdmin');
