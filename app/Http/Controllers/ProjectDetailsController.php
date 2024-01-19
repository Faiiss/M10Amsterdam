<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectDetailsController extends Controller
{
    public function show($id)
    {
        $project = Project::find($id);

        return view('project-details', compact('project'));
    }
}
