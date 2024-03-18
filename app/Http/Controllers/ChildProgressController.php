<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChild_ProgressRequest;
use App\Http\Requests\UpdateChild_ProgressRequest;
use App\Models\ChildProgress;
use Illuminate\Http\Request;

class ChildProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $child_progress= ChildProgress::all();
        return view('child_progress.index', compact('child_progress'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('child_progress.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChild_ProgressRequest $request)
    {
        ChildProgress::create([
            'month' => $request->month,
            'abdominal_recumbency' => $request->abdominal_recumbency,
            'dorsal_recumbency' => $request->dorsal_recumbency,
            'visual_development' => $request->visual_development,
            'social' => $request->social,
            'sitting' => $request->sitting,
            'stand_up' => $request->stand_up,
            'adaptation' => $request->adaptation,
            'movement' => $request->movement,
            'language' => $request->language,
        ]);
        return redirect()->route('child_progress.index')->with('success','child_progress created successfully');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(ChildProgress $childProgress)
    {
        return view('child_progress.show', compact('childProgress'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildProgress $childProgress)
    {
        return view('child_progress.edit', compact('childProgress'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChild_ProgressRequest $request, ChildProgress $childProgress)
    {
        $childProgress->update([
            'month' => $request->month,
            'abdominal_recumbency' => $request->abdominal_recumbency,
            'dorsal_recumbency' => $request->dorsal_recumbency,
            'visual_development' => $request->visual_development,
            'social' => $request->social,
            'sitting' => $request->sitting,
            'stand_up' => $request->stand_up,
            'adaptation' => $request->adaptation,
            'movement' => $request->movement,
            'language' => $request->language,
        ]);
        return redirect()->route('child_progress.index')->with('success','child_Progress updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildProgress $childProgress)
    {
        $childProgress->delete();
        return redirect()->route('child_progress.index')->with('success','child_Progress deleted successfully');
    }

    public function viewChildProgress()
    {
        $allmonth=ChildProgress::all();
        return view('child_progress.view',compact('allmonth'));

    }
}
