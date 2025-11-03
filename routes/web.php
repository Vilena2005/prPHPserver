<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

//Route::get('/list', function () {
//    return view('list');
//})->name('list');

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

//Route::get('/division', function () {
//    return view('division');
//})->name('division');

Route::middleware('guest')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'show'])->name('register');

    Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

//Абоненты
    Route::get('/list', [\App\Http\Controllers\AbonentController::class, 'abon'])->name('list');

    Route::get('/add/newabonent', [\App\Http\Controllers\AbonentController::class, 'see'])->name('add.newabonent');
    Route::post('/add/newabonent', [\App\Http\Controllers\AbonentController::class, 'store'])->name('store');

//Подразделения
    Route::get('/division', [\App\Http\Controllers\DivisionController::class, 'display'])->name('division');
    Route::get('/add/newdivision', [\App\Http\Controllers\DivisionController::class, 'div'])->name('add.newdivision');
    Route::post('/add/newdivision', [\App\Http\Controllers\DivisionController::class, 'create'])->name('create');

//Помещения

});


