use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReservationController;

Route::apiResource('rooms', RoomController::class);
Route::apiResource('guests', GuestController::class);
Route::apiResource('reservations', ReservationController::class);
