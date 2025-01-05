<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Guest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Room::with('guests')->get();  // Get all rooms with their guests
        return $reservations;
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'guest_id' => 'required|exists:guests,id',
        ]);

        $room = Room::findOrFail($request->room_id);
        $room->guests()->attach($request->guest_id);  // Create the reservation (pivot relation)

        return response()->json('Reservation created', 201);
    }

    public function show($id)
    {
        $room = Room::with('guests')->findOrFail($id);
        return $room;  // Show room with associated guests
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->guests()->detach();  // Remove all guests (reservations)
        return response()->json('Reservations removed', 204);
    }
}
