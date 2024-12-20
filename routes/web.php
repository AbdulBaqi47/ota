<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Central\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Central\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Central\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Central\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Central\Auth\NewPasswordController;
use App\Http\Controllers\Central\Auth\PasswordController;
use App\Http\Controllers\Central\Auth\PasswordResetLinkController;
use App\Http\Controllers\Central\Auth\RegisteredUserController;
use App\Http\Controllers\Central\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return view('Central.Frontend.index');
        });

        Route::middleware('guest')->group(function () {
            Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

            Route::post('register', [RegisteredUserController::class, 'store']);

            Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

            Route::post('login', [AuthenticatedSessionController::class, 'store']);

            Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

            Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

            Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

            Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
        });

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::get('/dashboard', [AdminController::class,"centralDasboard"])->name('centralDasboard');
            Route::get('/show', [AdminController::class,"showTenants"])->name('showTenant');
            Route::get('/create', [AdminController::class,"createTenant"])->name('createTenant');
            Route::post('/store', [AdminController::class,"storeTenant"])->name('storeTenant');
            Route::get('verify-email', EmailVerificationPromptController::class)
            ->name('verification.notice');

            Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

            Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

            Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

            Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

            Route::put('password', [PasswordController::class, 'update'])->name('password.update');

            Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
        });




    });
}

