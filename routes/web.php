<?php

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Route Group
Route::middleware(['auth', 'user-access:user'])->group(function (){

    Route::get('/user/index', [App\Http\Controllers\HomeController::class, 'userHome'])->name('user.index');
});

// Admin Route Group
Route::middleware(['auth', 'user-access:admin'])->group(function (){

    Route::get('/admin/index', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.index');

    // Routes Group Sensor
    Route::controller(App\Http\Controllers\Admin\SensorController::class)->group(function () {
        Route::get('/admin/sensor','index');
        Route::get('/admin/sensor/create','create');
        Route::post('/admin/sensor','store');
        Route::get('/admin/sensor/{id}/edit', 'edit');
        Route::put('/admin/sensor/{id}', 'update');
        Route::get('/admin/sensor/{id}/delete', 'destroy');
    });
});

// SA Route Group
Route::middleware(['auth', 'user-access:sa'])->group(function (){

    Route::get('/sa/index', [App\Http\Controllers\HomeController::class, 'saHome'])->name('sa.index');

    // Routes Group Sensor
    Route::controller(App\Http\Controllers\Admin\SensorController::class)->group(function () {
        Route::get('/sa/sensor','index');
    });
});
