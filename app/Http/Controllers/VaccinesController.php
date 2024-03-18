<?php

namespace App\Http\Controllers;

use App\Models\vaccines;
use App\Http\Requests\StorevaccinesRequest;
use App\Http\Requests\UpdatevaccinesRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
        $image_path_vaccines = $request->file('image_path_vaccines')->store('image_path_vaccine', 'public');
        $short_video_path_vaccines = $request->file('short_video_path_vaccines')->store('short_video_path_vaccines', 'public');

        vaccines::create(([
            'name' => $request->name,
            'description' => $request->description,
            'image_path_vaccines' => $image_path_vaccines,
            'short_video_path_vaccines' => $short_video_path_vaccines,
            'indication' => $request->indication,
            'recommended_age' => $request->recommended_age,
            'guidelines' => $request->guidelines,
            'injection_location' => $request->injection_location,
        ]));
        return redirect()->route('vaccines.index')->with('success', 'vaccine created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(vaccines $vaccine)
    {
        return view('vaccine.show', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vaccines $vaccine)
    {
        //   $vaccines=vaccines::findOrFail($vaccines->id);
        return view('vaccine.edit', compact('vaccine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevaccinesRequest $request, vaccines $vaccine)
    {
        $image_path_vaccines = $vaccine->image_path_vaccines;
        $short_video_path_vaccines = $vaccine->short_video_path_vaccines;

        if ($request->file('image_path_vaccines') && $request->file('image_path_vaccines') != $vaccine->image_path_vaccines) {
            Storage::disk('public')->delete($vaccine->image_path_vaccines);
            $image_path_vaccines = $request->file('image_path_vaccines')->store('image_path_vaccine', 'public');
        };


        if ($request->file('short_video_path_vaccines') && $request->file('short_video_path_vaccines') != $vaccine->short_video_path_vaccines) {
            Storage::disk('public')->delete($vaccine->short_video_path_vaccines);
            $short_video_path_vaccines = $request->file('short_video_path_vaccines')->store('short_video_path_vaccines', 'public');
        };

        $vaccine->update([
            'name' => $request->name ? $request->name : $vaccine->name,
            'description' => $request->description ?  $request->description : $vaccine->description,
            'image_path_vaccines' => $image_path_vaccines ? $image_path_vaccines : $vaccine->image_path_vaccines,
            'short_video_path_vaccines' => $short_video_path_vaccines ? $short_video_path_vaccines : $vaccine->short_video_path_vaccines,
            'indication' => $request->indication ?  $request->indication : $vaccine->indication,
            'recommended_age' => $request->recommended_age ? $request->recommended_age : $vaccine->recommended_age,
            'guidelines' => $request->guidelines ? $request->guidelines : $vaccine->guidelines,
            'injection_location' => $request->injection_location ? $request->injection_location : $vaccine->injection_location,
        ]);
        return redirect()->route('vaccines.index')->with('success', 'vaccine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vaccines $vaccine)
    {
        if (Storage::disk('public')->exists($vaccine->image_path_vaccines)) {
            Storage::disk('public')->delete($vaccine->image_path_vaccines);
        };

        if (Storage::disk('public')->exists($vaccine->short_video_path_vaccines)) {
            Storage::disk('public')->delete($vaccine->short_video_path_vaccines);
        };
        $vaccine->delete();
        return redirect()->route('vaccines.index')->with('success', 'vaccine deleted successfully');
    }
    public function fromChooseAge(){
        $allVaccines = vaccines::all();
        return view('vaccine.fromChooseAge', compact('allVaccines'));
    }
    public function rightVaccine(Request $request){
        $select_month=$request->select_month;
        $recommended_age=vaccines::where('recommended_age',$select_month)->get();
        return view('vaccine.displayRightVaccine',compact('recommended_age'));
    }

}
