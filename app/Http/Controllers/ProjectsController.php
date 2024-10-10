<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('project.index');
    }

    public function show(Project $project)
    {
        dd($project);

        return view('projects.show', compact('project'));
    }
}
