<?php

use App\Http\Controllers\productController;
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
})->name('login');

Route::post('/login',[userController::class,'login']);
});
Route::get('/user',function(){
   return redirect('/user/'. auth()->id());
});
Route::get('/logout',[userController::class,'logout']);

Route::get('/product/create',[productController::class,'create'])->middleware('auth');
Route::post('/product/create',[productController::class,'store'])->middleware('auth');
Route::get('/product/{product}',[productController::class,'show']);
Route::get('product/{product}/edit',[productController::class,'edit'])->middleware('auth');
Route::put('/product/{product}/edit',[productController::class,'update'])->middleware('auth');
Route::delete('/product/{product}/delete',[productController::class,'delete'])->middleware('auth');
Route::get('/product/{product}/upvote',[productController::class,'upvote']);
Route::get('/product/{product}/downvote',[productController::class,'downvote']);

Route::post('/product/{product}/create/feedback',[productController::class,'feedback']);

Route::get('/user/{user}',function($user){
    
    return view('user.profile');

})->middleware(['user','auth']);