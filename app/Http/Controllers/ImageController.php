<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Str;
use App\Http\Requests\StoreImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filepath = request('image');
        
        if(request('format') == 0)
        {
            $width = 2000;
            $height = 1333;
        }
        else
        {
            $width = 1333;
            $height = 2000;
        }

        $photo = Image::make($filepath)->fit($width,$height);
        $photoName = Str::random(10) . time() . ".webp";
        Storage::disk('public')->put('/images/' . $photoName, $photo->encode('webp'));


        $image = new Image();
        $image->alt = $request->alt;
        $image->filepath = '/images/' . $photoName;
        $image->save();

        return redirect('/admin/photos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
