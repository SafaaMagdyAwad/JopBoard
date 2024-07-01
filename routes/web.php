<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JopController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[AuthController::class,'start'])->name('start');


Route::get('/registerForm',[AuthController::class,'registerForm'])->name('registerForm');
Route::post('/register',[AuthController::class,'register'])->name('register');


Route::get('/loginForm',[AuthController::class,'loginForm'])->name('loginForm');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::get('/allJops',[JopController::class,'allJops'])->name('allJops');
Route::get('/jop/{id}',[JopController::class,'jop'])->name('jop');




//employee اللي عايز يتوظف
Route::group(['middleware'=> 'employee'], function () { 
   


    Route::get('/jopApply/{id}',[JopController::class,'jopApply'])->name('jopApply');//id is the jop id


    Route::get('/notifications',[UserController::class,'notifications'])->name('notifications');//id is the jop id
   
   
    Route::get('/reqTrack',[UserController::class,'reqTrack'])->name('reqTrack');//id is the jop id

    Route::get('/deleteJopREquest/{jop_id}',[UserController::class,'deleteJopREquest'])->name('deleteJopREquest');//id is the jop id

    
});








//seeker اللي بيدور على ناس
Route::group(['middleware'=> 'seeker'], function () {
    
    Route::get('/createJopForm',[JopController::class,'createJopForm'])->name('createJopForm');
    Route::post('/createJop',[JopController::class,'createJop'])->name('createJop');
    
    
    
    Route::get('/updateJopForm/{id}',[JopController::class,'updateJopForm'])->name('updateJopForm');
    Route::post('/updateJop/{id}',[JopController::class,'updateJop'])->name('updateJop');
    
    
    Route::get('/deleteJop/{id}',[JopController::class,'deleteJop'])->name('deleteJop');
    
    Route::get('/allSeekerJops',[JopController::class,'allSeekerJops'])->name('allSeekerJops');
    
    Route::get('/allJopRequests/{id}',[UserController::class,'allJopRequests'])->name('allJopRequests');
    
    Route::get('/contact/{id}/{jop_id}',[UserController::class,'contact'])->name('contact');
    
    Route::get('/waitingList/{id}',[UserController::class,'waitingList'])->name('waitingList');
    Route::get('/acceptedList/{id}',[UserController::class,'acceptedList'])->name('acceptedList');
    
    Route::get('/accepted/{id}/{jop_id}',[UserController::class,'accepted'])->name('accepted');
    Route::get('/rejected/{id}/{jop_id}',[UserController::class,'rejected'])->name('rejected');
    

});


Route::group(['middleware'=> 'admin'], function () {});