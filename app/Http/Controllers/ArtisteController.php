<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use Illuminate\Http\Request;
use Illuminate\View\ViewException;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtisteRequest;

class ArtisteController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistes = Artiste::paginate(5);
        return view('dashboard.index', compact('artistes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtisteRequest $artisteRequest)
    {
        Artiste::create($artisteRequest->all());

        return redirect()->route('artistes.index')->with('info', 'Un artiste a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $artiste = Artiste::where('id', $id)->with('images')->first();
        return view('dashboard.show', compact('artiste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artiste $artiste)
    {
        return view('dashboard.edit', compact('artiste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtisteRequest $artisteRequest, Artiste $artiste)
    {
        $artiste->update($artisteRequest->all());
    
        return redirect()->route('artistes.index')->with('info', 'L Artiste a bien été modifié');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Artiste $artiste)
    {
        if ($request->input('confirm') !== 'yes') {
            return redirect()->back()->with('error', 'Suppression annulée.');
        }

        $artiste->delete();
        return back()->with('info', 'Artiste supprimé avec succès.');
    }
}
