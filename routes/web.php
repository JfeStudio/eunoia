<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// auth
Route::middleware('guest')->group(function() {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register');
});

Route::resource('/books', BookController::class);

Route::resource('/jobs', JobController::class)->middleware('auth');
Route::post('logout', LogoutController::class, 'logout')->name('logout');
Route::redirect('/', '/dashboard');
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Route::get('/tasks/{task}/edit', [TaskController::class, 'edited'])->name('tasks.edited');
Route::resource('/tasks', TaskController::class);
// Route::fallback()