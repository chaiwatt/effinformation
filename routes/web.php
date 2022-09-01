<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'dashboard'], function (){
        Route::get('', DashboardController::class)->name('dashboard');
    });
});
