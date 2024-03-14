<?php

namespace App\Http\Controllers;

use App\Models\frequently_asked_questions;
use App\Http\Requests\Storefrequently_asked_questionsRequest;
use App\Http\Requests\Updatefrequently_asked_questionsRequest;
use Illuminate\Support\Facades\Storage;

class FrequentlyAskedQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frequently_asked_questions= frequently_asked_questions::all();
        return view('frequently_asked_questions.index', compact('frequently_asked_questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frequently_asked_questions.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storefrequently_asked_questionsRequest $request)
    {
        $image=$request->file('image')->store('image_frequently_asked_questions','public');

        frequently_asked_questions::create([
            'question' =>$request->question,
            'answer' =>$request->answer,
            'image' =>$image,
        ]);
        return redirect()->route('frequently_asked_questions.index')->with('success','asked_questions created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(frequently_asked_questions $frequently_asked_question)
    {
        return view('frequently_asked_questions.show', compact('frequently_asked_question'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(frequently_asked_questions $frequently_asked_question)
    {
        return view('frequently_asked_questions.edit', compact('frequently_asked_question'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatefrequently_asked_questionsRequest $request, frequently_asked_questions $frequently_asked_question)
    { 
        $image=$frequently_asked_question->image;
        
        if($request->file('image') && $request->file('image') != $frequently_asked_question->image ){
        Storage::disk('public')->delete($frequently_asked_question->image);
        $image=$request->file('image')->store('image_frequently_asked_questions','public');
    };

        $frequently_asked_question->update([
            'question' =>$request->question,
            'answer' =>$request->answer,
            'image' =>$image,
        ]);
        return redirect()->route('frequently_asked_questions.index')->with('success','asked_questions updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(frequently_asked_questions $frequently_asked_question)
    {
        if(Storage::disk('public')->exists($frequently_asked_question->image)){
            Storage::disk('public')->delete($frequently_asked_question->image);
        };

        $frequently_asked_question->delete();
        return redirect()->route('frequently_asked_questions.index')->with('success','asked_questions deleted successfully');
    }
}
