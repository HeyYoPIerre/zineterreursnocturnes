<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StaticPageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function artistes(): View
    {
        return view('artistes');
    }

    public function participer(): View
    {
        return view('participer');
    }
}
