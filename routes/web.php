<?php

use Illuminate\Support\Facades\Route;
use App\View\Components\layout;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeviceController;

// Route::get('/', function () {
//     return view('LandingPage');
// });
Route::get('/', function () {
    return view('LandingPage');
});

Route::post('/auth/conf', [AuthController::class, 'authenticate']);

Route::resource('auth', AuthController::class)->only([
    'index', 'store'
]);

Route::delete('/logout', [AuthController::class, 'logout']);

Route::get('/devices/{device?}', [DeviceController::class, 'index']);

Route::resource('/devices', DeviceController::class)->middleware('auth');
// Route::get('/forgot-password', function () {
//     return view('ResetPassword');
// })->middleware('guest')->name('password.request');

// Route::post('/forgot-password', function (Request $request) {
//     $request->validate(['email' => ['required', 'email']]);

//     $status = Password::sendResetLink(
//         $request->only('email')
//     );
// });