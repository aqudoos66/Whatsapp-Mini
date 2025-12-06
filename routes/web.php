<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MessageController;

Route::get('/settings', [SettingsController::class, 'index']);
Route::post('/settings/save', [SettingsController::class, 'save']);

Route::get('/send-message', [MessageController::class, 'index']);
Route::post('/send-message', [MessageController::class, 'send']);

Route::get('/', function () {
    return view('password');
});
