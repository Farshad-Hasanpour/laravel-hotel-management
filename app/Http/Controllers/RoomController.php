<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return Room::all();  // Get all rooms
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $room = Room::create($request->all());
        return response()->json($room, 201);  // Created status
    }

    public function show(Room $room)
    {
        return $room;  // Show a specific room
    }

    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        return response()->json($room);
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json(null, 204);  // No content status
    }
}
