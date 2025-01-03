<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth', 'prefix' => 'setting'], function () {
    Route::resource('products', ProductController::class)->Middleware('auth');
    Route::get('general', [SettingController::class, 'index'])->name('setting.index');
    Route::get('seo', [SettingController::class, 'seo'])->name('setting.seo');
    Route::get('ads', [SettingController::class, 'ads'])->name('setting.ads');
    Route::get('social-login', [SettingController::class, 'socialLogin'])->name('setting.social.login');
    Route::get('payment', [SettingController::class, 'payment'])->name('setting.payment');
    Route::get('google-recapture', [SettingController::class, 'googleRecapture'])->name('setting.google.recapture');
    Route::get('email', [SettingController::class, 'sendMail'])->name('setting.email');
    Route::get('email-template', [SettingController::class, 'emailTemplate'])->name('setting.email.template');
});
