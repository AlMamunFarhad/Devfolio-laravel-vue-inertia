<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
{
    public function index()
    {
        // Show the list of skills.
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }
    public function create()
    {
        // Show the form for creating a new skill.
        return Inertia::render('Skills/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5120',
        ]);
        // Create Skill and Image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('skills');
            Skill::create([
                'name' => $request->name,
                'image' => $image,
            ]);
            return redirect()->route('skills.index')->with('message', 'Skill created successfully');
        }
        return Redirect::back();
    }
    public function edit(Skill $skill)
    {
        // Show the form for editing the specified skill.
        return Inertia::render('Skills/Edit', compact('skill'));
    }
    public function update(Request $request, Skill  $skill)
    {
        $image = $skill->image;
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:5120',
        ]);
        // Update Skill and Image upload
        if ($request->hasFile('image')) {
            Storage::delete($image);
            $image = $request->file('image')->store('skills');
        }
        $skill->update([
            'name' => $request->name,
            'image' => $image,
        ]);
        return Redirect::route('skills.index')->with('message', 'Skill updated successfully');
    }
    public function destroy(Skill $skill)
    {
        // Delete the specified skill and its image.
        $image = $skill->image;
        if (Storage::exists($image)) {
            Storage::delete($image);
        }
        $skill->delete();
        return Redirect::route('skills.index')->with('message', 'Skill deleted successfully');
    }
}
