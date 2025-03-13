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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5120',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->store('skills');
            Skill::create([
                'name' => $request->name,
                'image' => $image,
            ]);
            return redirect()->route('skills.index');
        }
        return Redirect::route('skills.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {

        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill  $skill)
    {
        $image = $skill->image;
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:5120',
        ]);

        if($request->hasFile('image')){
            Storage::delete($image);
            $image = $request->file('image')->store('skills');
        }

        $skill->update([
            'name' => $request->name,
            'image' => $image,
        ]);
        return Redirect::route('skills.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $image = $skill->image;
        if(Storage::exists($image)){
            Storage::delete($image);
        }
        $skill->delete();
        return Redirect::route('skills.index');
    }
}
