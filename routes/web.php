<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/', function () {
    return view('home');
})->name('home');

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
    Route::get('/add/newabonent', [\App\Http\Controllers\AbonentController::class, 'add'])->name('add.newabonent');
    Route::post('/add/newabonent', [\App\Http\Controllers\AbonentController::class, 'store'])->name('store');

    //редактирование и удаление абонента
    Route::get('/edit/{id}/editAbonent', [\App\Http\Controllers\AbonentController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}/editAbonent', [\App\Http\Controllers\AbonentController::class, 'update'])->name('update');
    Route::delete('/edit/{id}/editAbonent', [\App\Http\Controllers\AbonentController::class, 'destroy'])->name('destroy');

//Подразделения
    Route::get('/division', [\App\Http\Controllers\DivisionController::class, 'display'])->name('division');
    Route::get('/add/newdivision', [\App\Http\Controllers\DivisionController::class, 'div'])->name('add.newdivision');
    Route::post('/add/newdivision', [\App\Http\Controllers\DivisionController::class, 'create'])->name('create');

//    Route::get('/edit/{id}/editDivision', [\App\Http\Controllers\DivisionController::class, 'transform'])->name('transformation');
//    Route::get('/edit/{id}/editDivision', [\App\Http\Controllers\DivisionController::class, 'reverse'])->name('reverse');

//Помещения
    Route::get('/rooms', [\App\Http\Controllers\RoomController::class, 'room'])->name('rooms');
    Route::get('/add/newroom', [\App\Http\Controllers\RoomController::class, 'new'])->name('add.newroom');
    Route::post('/add/newroom', [\App\Http\Controllers\RoomController::class, 'make'])->name('make');

    //редактирование и удаление помещения
    Route::get('/edit/{id}/editRoom', [\App\Http\Controllers\RoomController::class, 'modify'])->name('modify');
    Route::put('/edit/{id}/editRoom', [\App\Http\Controllers\RoomController::class, 'change'])->name('change');
    Route::delete('/edit/{id}/editRoom', [\App\Http\Controllers\RoomController::class, 'remove'])->name('remove');

});


