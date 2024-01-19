<?php

// app/Http/Controllers/projectController.php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project', ['projects' => $projects]);
    }
}

