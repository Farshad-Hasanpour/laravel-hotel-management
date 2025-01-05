<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return Guest::all();  // Get all guests
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
        ]);

        $guest = Guest::create($request->all());
        return response()->json($guest, 201);  // Created status
    }

    public function show(Guest $guest)
    {
        return $guest;  // Show a specific guest
    }

    public function update(Request $request, Guest $guest)
    {
        $guest->update($request->all());
        return response()->json($guest);
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
        return response()->json(null, 204);  // No content status
    }
}
