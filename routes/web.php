<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/* Profile Dashboard index for User Masuk */
Route::get('profile/manageuser', [UserController::class, 'index'])->name('profile.manageuser');
Route::middleware(['auth'])->group(function () {
    Route::get('profile/manageuser', [UserController::class, 'index'])->name('profile.manageuser');
    Route::post('profile/manageuser', [UserController::class, 'store'])->name('profile.manageuser');
    Route::get('profile/hasiluser', [UserController::class, 'pengumuman'])->name('profile.hasiluser');
    Route::get('profile/pengumuman', [UserController::class, 'lihatjadwal'])->name('profile.pengumuman');
});

/* Kelola Data User for Admin Role*/
Route::middleware(['auth'])->group(function () {
    Route::get('profile/manageadmin', [AdminController::class, 'index'])->name('profile.manageadmin');
    Route::get('editforadmin/{id}', [AdminController::class, 'edit'])->name('profile.editforadmin');
    Route::post('updateuser/{id}', [AdminController::class, 'update'])->name('profile.updateuser');
});

/*input jadwal from admin to every user*/
Route::middleware(['auth'])->group(function () {
    Route::get('profile/inputjadwal', [AdminController::class, 'schedule'])->name('profile.inputjadwal');
});


// Route::get('profile/manageadmin/{id}', [UserController::class, 'edit'])->name('manageadmin');
Route::get('profile/partials/chart-form', [UserController::class, 'chart']);
require __DIR__.'/auth.php';
