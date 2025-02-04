<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArtisteController extends Controller
{
    public function storeImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $artiste = Artiste::findOrFail($id);
    
        $path = $request->file('image')->store('images', 'public'); // Stockage dans storage/app/public/images
    
        $artiste->images()->create([
            'path' => $path,
        ]);
    
        return back()->with('success', 'Image ajoutée avec succès');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistes = Artiste::paginate(5);
        return view('index', compact('artistes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artiste $artiste)
    {
        return view('show', compact('artiste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artiste $artiste)
    {
        $artiste->delete();

        return back()->with('info', 'L Artiste a bien été supprimé dans la base de données.');
    }
}
