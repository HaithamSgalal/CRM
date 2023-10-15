<?php


use App\Http\Controllers\UserController;



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UnitPhotoController;

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

Route::get('home', function () {
    return view('home');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/clients', 'index')->name('allClients');
    Route::get('/clients/create', 'create')->name('createClients');
    Route::post('/clients/store', 'store')->name('storeClients');
    Route::post('/clients/update', 'update')->name('updateClients');
    Route::get('/clients/edit/{id}', 'edit')->name('editClients');
    Route::delete('/clients/destroy/{id}', 'destroy')->name('destroyClients');
});

Route::controller(UnitController::class)->group(function () {
    Route::get('/Units', 'index')->name('allUnits');
    Route::get('/Units/create', 'create')->name('createUnits');
    Route::post('/Units/store', 'store')->name('storeUnits');
    Route::post('/Units/update', 'update')->name('updateUnits');
    Route::get('/Units/edit/{id}', 'edit')->name('editUnit');
    Route::get('/Units/show/{id}', 'show')->name('showUnit');
    Route::get('/Units/destroy/{id}', 'destroy')->name('destroyUnit');
});

// Route::resource('unitPhoto', UnitPhotoController::class);

Route::get('unitPhoto/destroy/{id}', [UnitPhotoController::class, 'destroy'])->name('unitPhoto.destroy');

