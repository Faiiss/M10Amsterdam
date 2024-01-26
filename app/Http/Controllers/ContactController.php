<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
}

