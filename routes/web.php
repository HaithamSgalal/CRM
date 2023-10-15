<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'viewUsers'])->name('users') ; 
Route::get('user/edit/{user:id}',[UserController::class,'editUser'])->name('edit.user') ; 
Route::post('user/update/{id}',[UserController::class,'updateUser'])->name('update.user') ; 
Route::get('user/delete/{id}' , [UserController::class , 'delete'])->name('softdelete.user') ; 
Route::get('user/create' , [UserController::class , 'create'])->name('create.user') ; 
Route::get('user/trashed' , [UserController::class , 'showTrashed'])->name('deleted.user') ; 
Route::get('user/clean/{id}' , [UserController::class , 'forcedelete'])->name('forcedelete.user') ;
Route::get('user/restore/{id}' , [UserController::class , 'restore'])->name('restore.user') ;
Route::post('user/create/new-user' , [UserController::class , 'createUser'])->name('load.user') ;