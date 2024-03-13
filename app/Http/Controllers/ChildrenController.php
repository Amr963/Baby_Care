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
    public function show(Childrens $child)
    {
        return view('children.show', compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Childrens $child)
    {
        return view('children.edit', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildrensRequest $request, Childrens $child)
    {
        // dd($request);
        $child->update([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);
        return view('children.show', compact('child'))->with('success', 'children updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Childrens $child)
    {
        // dd($child);
        $child->delete();
        return back()->with('success', 'children deleted successfully!');
    }
}
