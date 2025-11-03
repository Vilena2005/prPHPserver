<?php

namespace App\Http\Controllers;

use App\Models\Abonent;
use App\Models\Division;
use Illuminate\Http\Request;

class AbonentController extends Controller
{
    public function add ()
    {
        $divisions = Division::all();
        return view('add.newabonent', compact('divisions'));
    }

    public function abon ()
    {
        $abonents = Abonent::with('division')->get();
        return view('list', compact('abonents'));


//        return view('list');


//        $divisions = Abonent::all();
//        return view('division', [
//            'divisions' => $divisions
//        ]);
    }

    public function store (Request $request)
    {
        $validated = $request->validate ([
            'surname' => 'required|string|min:3|max:255',
            'name' => 'required|string|min:3|max:255',
            'patronym' => 'required|string|min:3|max:255',
            'birth_date' => 'required',
            'phone' => 'required|string|max:15',
            'division_id' => 'required|exists:divisions,id',
        ]);

        Abonent::create([
            'surname' => $validated ['surname'],
            'name' => $validated ['name'],
            'patronym' => $validated ['patronym'],
            'birth_date' => $validated ['birth_date'],
            'phone' => $validated ['phone'],
            'division_id' => $validated ['division_id'],
        ]);

        return redirect('list');
    }
}
