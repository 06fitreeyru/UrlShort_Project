<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\HouseController;

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
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function(){
   
    Route::get('/adminHome', [AuthController::class, 'adminHome'])->name('adminHome');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/indexUsers', [HouseController::class, 'indexUser'])->name('indexUsers');
    Route::get('/UrlShort', [HouseController::class, 'UrlShort'])->name('UrlShort');
    
});
Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/', [UrlController::class, 'index'])->name('homes');
Route::post('/shorten', [UrlController::class, 'shorten'])->name('shorten');
Route::get('/{code}', [UrlController::class, 'redirect'])->name('redirect');

// Route::resource('/admin', AuthController::class);



