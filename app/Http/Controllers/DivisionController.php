<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DivisionController extends Controller
{

    public function display ()
    {
        $divisions = Division::all();
        return view('division', compact('divisions'));

    }

    public function div ()
    {
        if (Gate::denies('create-all')) {
            abort(403);
        }

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

//    public function transform ($id)
//    {
////        if (Gate::denies('create-all')) {
////            abort(403);
////        }
//
//        $divisions = Division::findOrFail($id);
//        return view('edit.editDivision', compact('divisions'));
//    }
//
//    public function reverse (Request $request, $id)
//    {
//        $validated = $request->validate([
//            'division_name' => 'required|string|min:3|max:255',
//            'division_type' => 'required|string|min:3|max:255',
//        ]);
//
//        $division = Division::findOrFail($id);
//        $division->update($validated);
//
//        return redirect('division');
//    }
}
