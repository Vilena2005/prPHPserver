<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoomController extends Controller
{
    public function new ()
    {
        if (Gate::denies('create-all')) {
            abort(403);
        }

        $divisions = Division::all();
        return view('add.newroom', compact('divisions'));
    }

    public function room ()
    {
        $rooms = Room::with('division')->get();
        return view('rooms', compact('rooms'));

    }

    public function make (Request $request)
    {
        $validated = $request->validate ([
            'room_number' => 'required|string|min:3|max:255',
            'room_type' => 'required|string|min:3|max:255',
            'division_id' => 'required|exists:divisions,id',
        ]);

        Room::create([
            'room_number' => $validated ['room_number'],
            'room_type' => $validated ['room_type'],
            'division_id' => $validated ['division_id'],
        ]);

        return redirect('rooms');
    }


    public function modify ($id)
    {
        if (Gate::denies('create-all')) {
            abort(403);
        }

        $room = Room::findOrFail($id);
        $divisions = Division::all();
        return view('edit.editRoom', compact('room', 'divisions'));
    }

    public function change (Request $request, $id)
    {
        $validated = $request->validate([
            'room_number' => 'required|string|min:3|max:255',
            'room_type' => 'required|string|min:3|max:255',
            'division_id' => 'required|exists:divisions,id',
        ]);

        $room = Room::findOrFail($id);
        $room->update($validated);

        return redirect('rooms');
    }

    public function remove ($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect('rooms');
    }

}
