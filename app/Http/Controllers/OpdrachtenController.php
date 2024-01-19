<?php

// app/Http/Controllers/OpdrachtenController.php

namespace App\Http\Controllers;

class OpdrachtenController extends Controller
{
    public function index()
    {
        return view('Opdrachten');
    }
}

