<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Http\Requests\StoreChildrenRequest;
use App\Http\Requests\UpdateChildrenRequest;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allChildren = Children::all();
        return view('children.index', compact('allChildren'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('children.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildrenRequest $request)
    {
        Children::created([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);
        return view('children.create')->with('success', 'children added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Children $children)
    {
        return view('children.show', compact('children'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Children $children)
    {
        return view('children.edit', compact('children'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildrenRequest $request, Children $children)
    {
        $children->update([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);
        return redirect()->route('children.show', $children);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Children $children)
    {
        $children->delete();
        return redirect()->route('children.index');
    }
}