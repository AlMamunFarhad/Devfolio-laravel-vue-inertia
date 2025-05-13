<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    public function index()
    {
        // Show the list of projects.
        $projects = ProjectResource::collection(Project::with('skill')->orderBy('created_at', 'DESC')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }
    public function create()
    {
        // Show the form for creating a new project.
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5120',
            'skill_id' => 'required',
        ]);
        // Create Project and Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects');
            Project::create([
                'name' => $request->name,
                'image' => $image,
                'project_url' => $request->project_url,
                'skill_id' => $request->skill_id
            ]);
            return Redirect::route('projects.index')->with('message', 'Project created successfully');
        }
        return Redirect::back();
    }
    public function edit(Project $project)
    {
        // Show the form for editing the specified project.
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:5120',
            'skill_id' => 'required',
        ]);
        // Update Project and Image upload
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $image = $request->file('image')->store('projects');
        }
        $project->update([
            'name' => $request->name,
            'image' => $image ?? $project->image,
            'project_url' => $request->project_url,
            'skill_id' => $request->skill_id
        ]);
        return Redirect::route('projects.index')->with('message', 'Project updated successfully');
    }
    public function destroy(Project $project)
    {
        // Delete the specified project and its image.
        Storage::delete($project->image);
        $project->delete();
        return Redirect::route('projects.index')->with('message', 'Project deleted successfully');
    }
}
