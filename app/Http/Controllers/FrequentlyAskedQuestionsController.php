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
        return redirect()->route('frequently_asked_questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(frequently_asked_questions $frequently_asked_questions)
    {
        return view('frequently_asked_questions.show', compact('frequently_asked_questions'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(frequently_asked_questions $frequently_asked_questions)
    {
        return view('frequently_asked_questions.edit', compact('frequently_asked_questions'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatefrequently_asked_questionsRequest $request, frequently_asked_questions $frequently_asked_questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(frequently_asked_questions $frequently_asked_questions)
    {
        $frequently_asked_questions->delete();
        return redirect()->route('frequently_asked_questions.index');
    }
}
