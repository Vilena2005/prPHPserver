<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function display ()
    {
        $divisions = Division::all();
        return view('division', [
            'divisions' => $divisions
        ]);
    }

    public function div ()
    {
        return view('add.newdivision');
    }

    public function create (Request $request)
    {
        $validated = $request->validate ([
            'division_name' => 'required|string|min:3|max:255',
            'division_type' => 'required|string|min:3|max:255',

        ]);

        Division::create([
            'division_name' => $validated ['division_name'],
            'division_type' => $validated ['division_type'],
        ]);

        return redirect('division');
    }
}
