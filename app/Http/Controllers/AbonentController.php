<?php

namespace App\Http\Controllers;

use App\Models\Abonent;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AbonentController extends Controller
{
    public function add ()
    {
        if (Gate::denies('create-all')) {
            abort(403);
        }

        $divisions = Division::all();
        return view('add.newabonent', compact('divisions'));
    }

    public function abon ()
    {

        $abonents = Abonent::with('division')->get();
        return view('list', compact('abonents'));

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

    public function edit ($id)
    {
        if (Gate::denies('create-all')) {
            abort(403);
        }

        $abonent = Abonent::findOrFail($id);
        $divisions = Division::all();
        return view('edit.editAbonent', compact('abonent', 'divisions'));
    }

    public function update (Request $request, $id)
    {
        $validated = $request->validate([
            'surname' => 'required|string|min:3|max:255',
            'name' => 'required|string|min:3|max:255',
            'patronym' => 'required|string|min:3|max:255',
            'birth_date' => 'required',
            'phone' => 'required|string|max:15',
            'division_id' => 'required|exists:divisions,id',
        ]);

        $abonent = Abonent::findOrFail($id);
        $abonent->update($validated);

        return redirect('list');
    }

    public function destroy($id)
    {
        $abonent = Abonent::findOrFail($id);
        $abonent->delete();

        return redirect('list');
    }
}
