<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/{name}', function ($name) {
    return 'about '.$name;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [ProfileController::class, 'index'])->name('index');

});


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/client',function(){
    return view('client');});

    Route::get('/admin',function(){
        return view('admin');});

require __DIR__.'/auth.php';
