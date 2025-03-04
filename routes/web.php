<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Livewire\Commentaire;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about/{name}', function ($name) {
//     return 'about '.$name;
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/myprofile', [ProfileController::class, 'show'])->name('myprofile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
});


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::post('/posts/{post}/like', [LikeController::class, 'toggleLike'])->name('like.store');
Route::get('/editProfile/edit', [ProfileController::class, 'edit'])->name('editProfile.edit');
Route::put('/updateProfile/{id}', [ProfileController::class, 'update']);
// Route::get('/counter', Commentaire::class);


require __DIR__.'/auth.php';
