<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('Tenant.index');
    });

    Route::get('/login', function () {
        return view('Tenant.signin');
    })->name('login');

    Route::get('/aboutUs', function () {
        return view('Tenant.about');
    })->name('aboutUs');

    Route::get('/Contact', function () {
        return view('Tenant.contact');
    })->name('contact_page');

    Route::get('/TourList', function () {
        return view('Tenant.tours');
    })->name('tourListPage');

    Route::get('/tourBooking', function () {
        return view('Tenant.tour-booking');
    })->name('tourBooking');
});
