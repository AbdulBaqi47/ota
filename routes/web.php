<?php

use Illuminate\Support\Facades\Route;




foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            // dd('hi i`m central domain');
            return view('welcome');
        });
    });
}
