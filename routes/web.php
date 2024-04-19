<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin.auth.login');
    Route::post('login', [AuthController::class, 'checkLogin'])->name('admin.auth.check-login');
    Route::get('register', [AuthController::class, 'register'])->name('admin.auth.register');
    Route::post('register', [AuthController::class, 'checkRegister'])->name('admin.auth.check-register');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.auth.logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('user')->name('admin.dashboard.index');

});