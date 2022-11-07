<?php

use App\Http\Controllers\userController;
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



Route::middleware('guest')->group(function(){
Route::get('/', function () {
    return view('welcome');
});
    
Route::get('/register',[userController::class,'create']);
Route::post('/register',[userController::class,'store']);

Route::get('/login',function(){
    return view('user.login');
});

Route::post('/login',[userController::class,'login']);
});
Route::get('/user',function(){
   return redirect('/user/'. auth()->id());
});
Route::get('/logout',[userController::class,'logout']);

Route::get('/user/{user}',function(){
    return view('user.profile');
});