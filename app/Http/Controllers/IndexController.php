<?php

// File: app/Http/Controllers/IndexController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function startednow()
    {
        return view('pages.startednow');
    }
}
