<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $data = $request->validated();

        Mail::to('pierre.mitou1@gmail.com')->send(new ContactMail($data));
    
        return redirect()->route('contact.create')->with('success', 'Votre message a été envoyé avec succès !');
    }
}
