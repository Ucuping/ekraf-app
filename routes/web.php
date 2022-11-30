<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', [AuthController::class, 'index'])->name('auth')->middleware('guest');
Route::get('/auth/check', [AuthController::class, 'check'])->name('auth.check');

Route::prefix('apps')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::prefix('users')
});

Route::get('/errors', function (Request $request) {
    // if (\Request::ajax()) {
    //     return view($view, $data);
    // } else {
    //     return view('backend.layouts.app', $data);
    // }
    return view('errors.' . $request->status);
});
