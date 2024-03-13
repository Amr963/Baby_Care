<?php

namespace App\Http\Controllers;

use App\Models\Childrens;
use App\Http\Requests\StoreChildrensRequest;
use App\Http\Requests\UpdateChildrensRequest;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allChildren = Childrens::all();
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
    public function store(StoreChildrensRequest $request)
    {
        // dd($request);
        Childrens::create([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);
        return back()->with('success', 'children added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Childrens $children)
    {
        return view('children.show', compact('children'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Childrens $children)
    {
        return view('children.edit', compact('children'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildrensRequest $request, Childrens $children)
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
    public function destroy(Childrens $children)
    {
        $children->delete();
        return redirect()->route('children.index');
    }
}