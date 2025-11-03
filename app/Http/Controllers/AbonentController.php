<?php

namespace App\Http\Controllers;

use App\Models\Abonent;
use App\Models\Division;
use Illuminate\Http\Request;

class AbonentController extends Controller
{
    public function create()
    {
        // Получаем все подразделения для выпадающего списка
        $divisions = Division::all();
        return view('add.newabonent', compact('divisions'));
    }
    public function see ()
    {
        return view('add.newabonent');
    }
    public function abon ()
    {
        $divisions = Division::all();
        return view('division', [
            'divisions' => $divisions
        ]);
    }

    public function store (Request $request)
    {
        $validated = $request->validate ([
            'surname' => 'required|string|min:3|max:255',
            'name' => 'required|string|min:3|max:255',
            'patronym' => 'required|string|min:3|max:255',
            'birth_date' => 'required',
            'phone' => 'required|max:15',
        ]);

        Abonent::create([
            'surname' => $validated ['surname'],
            'name' => $validated ['name'],
            'patronym' => $validated ['patronym'],
            'birth_date' => $validated ['birth_date'],
            'phone' => $validated ['phone'],
        ]);

        return redirect('list');
    }
}
