<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bachelier;

class BachelierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bacheliers = Bachelier::all();
        return view('bacheliers.index', compact('bacheliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bacheliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero_table' =>'required|integer',
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'etablissement' => 'required|string|max:255',
            'mention' => 'nullable|string|max:255',
        ]);

        Bachelier::create($validatedData);

        return redirect()->route('bacheliers.index')->with('success', 'Bachelier ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bachelier = Bachelier::findOrFail($id);
        return view('bacheliers.show', compact('bachelier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bachelier = Bachelier::findOrFail($id);
        return view('bacheliers.edit', compact('bachelier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'numero_table' =>'required|integer',
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'etablissement' => 'required|string|max:255',
            'mention' => 'nullable|string|max:255',
        ]);

        Bachelier::whereId($id)->update($validatedData);

        return redirect()->route('bacheliers.index')->with('success', 'Bachelier modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bachelier = Bachelier::findOrFail($id);
        $bachelier->delete();

        return redirect()->route('bacheliers.index')->with('success', 'Bachelier supprimé avec succès.');
    }
}
