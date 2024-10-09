<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;




foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            // dd('hi i`m central domain');
            return view('welcome');
        });

        Route::get('/dashboard', [AdminController::class,"centralDasboard"])->name('centralDasboard');
        Route::get('/show', [AdminController::class,"showTenants"])->name('showTenant');
        Route::get('/create', [AdminController::class,"createTenant"])->name('createTenant');
        Route::post('/store', [AdminController::class,"storeTenant"])->name('storeTenant');

    });
}
