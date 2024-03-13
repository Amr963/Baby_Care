<?php

namespace App\Http\Controllers;

use App\Models\vaccines;
use App\Http\Requests\StorevaccinesRequest;
use App\Http\Requests\UpdatevaccinesRequest;

class VaccinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allVaccines = vaccines::all();
        return view('vaccine.index', compact('allVaccines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vaccine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevaccinesRequest $request)
    {
        vaccines::create(([
            'name' => $request->name,
            'description' => $request->description,
            'image_path_vaccines' => $request->image_path_vaccines,
            'short_video_path_vaccines' => $request->short_video_path_vaccines,
            'indication' => $request->indication,
            'recommended_age' => $request->recommended_age,
            'guidelines' => $request->guidelines,
            'injection_location' => $request->injection_location,
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(vaccines $vaccines)
    {
        return view('vaccine.show', compact('vaccines'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vaccines $vaccines)
    {
        return view('vaccine.edit', compact('vaccines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevaccinesRequest $request, vaccines $vaccines)
    {
        $vaccines->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_path_vaccines' => $request->image_path_vaccines,
            'short_video_path_vaccines' => $request->short_video_path_vaccines,
            'indication' => $request->indication,
            'recommended_age' => $request->recommended_age,
            'guidelines' => $request->guidelines,
            'injection_location' => $request->injection_location,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vaccines $vaccines)
    {
        $vaccines->delete();
        return redirect()->route('Vaccines.index');
    }
}
