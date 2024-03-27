<?php

namespace App\Http\Controllers;

use App\Models\ChildLengthStats;
use App\Http\Requests\StoreChildLengthStatsRequest;
use App\Http\Requests\UpdateChildLengthStatsRequest;

class ChildLengthStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $age_for_length = ChildLengthStats::get(['age'])->toArray();
        $length_child = ChildLengthStats::get(['length_child'])->toArray();
        return view('ChildWeightStats.index', compact('age_for_length', 'length_child'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ChildLengthStats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildLengthStatsRequest $request)
    {
        ChildLengthStats::create([
            'age' => $request->age,
        ]);
        return back()->with('success', 'ChildLengthStats added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChildLengthStats $childLengthStats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildLengthStats $childLengthStats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildLengthStatsRequest $request, ChildLengthStats $childLengthStats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildLengthStats $childLengthStats)
    {
        //
    }
}
