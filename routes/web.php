<?php
use Illuminate\Support\Facades\Route;
use \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;

Route::withoutMiddleware([ValidateCsrfToken::class])->group(function(){
    Route::apiResource('rooms', RoomController::class);
    Route::apiResource('guests', GuestController::class);
    Route::apiResource('reservations', ReservationController::class);
});

