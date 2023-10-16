<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
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
    })->name('home');

    Route::get('/dashboard',[BusinessController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // for location route

    Route::get('/location',[LocationController::class,'index'])->name('location.index');
    Route::get('/location/create',[LocationController::class,'create'])->name('location.create');
    Route::get('/location/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
    Route::post('/location/update/{id}',[LocationController::class,'update'])->name('location.update');
    Route::post('/location/store',[LocationController::class,'store'])->name('location.store');
    Route::delete('/location/delete/{id}',[LocationController::class,'destroy'])->name('location.delete');



    // for business route

    Route::get('/business/create',[BusinessController::class,'create'])->name('business.create');
    Route::post('/business/store',[BusinessController::class,'store'])->name('business.store');
    Route::get('/business/show/{id}',[BusinessController::class,'show'])->name('business.show');
    Route::get('/business/edit/{id}',[BusinessController::class,'edit'])->name('business.edit');
    Route::post('/business/update/{business}',[BusinessController::class,'update'])->name('business.update');
    Route::delete('/business/delete/{business}',[BusinessController::class,'destroy'])->name('business.delete');




});

    require __DIR__.'/auth.php';
