<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;


class ProjectsController extends Controller {

    public static function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
                                              'title'       => ['required', 'min:3', 'max:32'],
                                              'description' => ['required', 'min:3', 'max:255'],
                                          ]);

        Project::create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) // example.com/projects/id/edit
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        request()->validate([
                                'title'       => ['required', 'min:3', 'max:32'],
                                'description' => ['required', 'min:3', 'max:255'],
                            ]);

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}


