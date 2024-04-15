<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


use App\Http\Controllers\Admin\Login\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\Login\AdminConfirmablePasswordController;
use App\Http\Controllers\Admin\Login\AdminEmailVerificationNotificationController;
use App\Http\Controllers\Admin\Login\AdminEmailVerificationPromptController;
use App\Http\Controllers\Admin\Login\AdminNewPasswordController;
use App\Http\Controllers\Admin\Login\AdminPasswordResetLinkController;
use App\Http\Controllers\Admin\Login\AdminRegisteredUserController;
use App\Http\Controllers\Admin\Login\AdminVerifyEmailController;
use Illuminate\Support\Facades\Route;


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
                ->name('password.update');
});


Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});


////////////////////////////Admin Routes /////////////////////////////////

Route::middleware('guest')->group(function () {
    Route::get('admin/register', [AdminRegisteredUserController::class, 'create'])
                ->name('register');
 
                Route::post('register', [AdminRegisteredUserController::class, 'store']);

    Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'store']);

    Route::get('admin/forgot-password', [AdminPasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('admin/forgot-password', [AdminPasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('admin/reset-password/{token}', [AdminNewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('admin/reset-password', [AdminNewPasswordController::class, 'store'])
                ->name('password.update');
});


Route::middleware('auth')->group(function () {
    Route::get('admin/verify-email', [AdminEmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('admin/verify-email/{id}/{hash}', [AdminVerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('admin/email/verification-notification', [AdminEmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('admin/confirm-password', [AdminConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('admin/confirm-password', [AdminConfirmablePasswordController::class, 'store']);

    Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

////////////////////////////Admin Routes /////////////////////////////////
