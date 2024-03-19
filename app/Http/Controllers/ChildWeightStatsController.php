<?php

namespace App\Http\Controllers;

use App\Models\ChildLengthStats;
use App\Models\ChildWeightStats;
use App\Http\Requests\StoreChildWeightStatsRequest;
use App\Http\Requests\UpdateChildWeightStatsRequest;

class ChildWeightStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ages = ChildWeightStats::get(['age', 'age_category'])->toArray();
        $weightsKg = ChildWeightStats::pluck('weightKg')->toArray();
        $age_for_length = ChildLengthStats::get(['age'])->toArray();
        $length_child = ChildLengthStats::get(['length_child'])->toArray();
        return view('ChildWeightStats.index', compact('ages', 'weightsKg', 'age_for_length', 'length_child'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ChildWeightStats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // for store 0-11 month && 1-12 year
    public function store(StoreChildWeightStatsRequest $request)
    {
        ChildWeightStats::create([
            'age' => $request->age,
            'age_category' => $request->age_category,
        ]);
        return back()->with('success', 'ChildWeightStats added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChildWeightStats $childWeightStats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildWeightStats $childWeightStats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildWeightStatsRequest $request, ChildWeightStats $childWeightStats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildWeightStats $childWeightStats)
    {
        //
    }
}