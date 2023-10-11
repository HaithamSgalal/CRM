<?php

use App\Http\Controllers\ClientController;
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
