<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Artiste;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistes = Artiste::all();
        return view('dashboard.images.create', compact('artistes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
        $image = $request->file('image');
        $base64 = base64_encode(file_get_contents($image->path()));
        
        Image::create([
            'base64' => $base64,
            'artiste_id' => $request->artiste_id,
        ]);
        
        return back()->with('success', 'Image ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
    public function destroy(string $id)
    {
        //
    }
}
