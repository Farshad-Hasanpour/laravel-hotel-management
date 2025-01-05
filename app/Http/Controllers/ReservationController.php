<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Guest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Room::with('guests')->get();
        return response()->json($reservations);
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'guest_id' => 'required|exists:guests,id',
        ]);

        $room = Room::findOrFail($request->room_id);
        $room->guests()->attach($request->guest_id);

        return response()->json('Reservation created', 201);
    }

    public function show($id)
    {
        $room = Room::with('guests')->findOrFail($id);
        return response()->json($room);
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->guests()->detach();
        return response()->json('Reservations removed', 204);
    }
}
