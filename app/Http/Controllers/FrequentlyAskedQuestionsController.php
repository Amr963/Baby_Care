<?php

namespace App\Http\Controllers;

use App\Models\frequently_asked_questions;
use App\Http\Requests\Storefrequently_asked_questionsRequest;
use App\Http\Requests\Updatefrequently_asked_questionsRequest;

class FrequentlyAskedQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storefrequently_asked_questionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(frequently_asked_questions $frequently_asked_questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(frequently_asked_questions $frequently_asked_questions)
    {
        //
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
        //
    }
}
