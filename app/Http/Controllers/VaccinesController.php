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
    public function store(StorevaccinesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vaccines $vaccines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vaccines $vaccines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevaccinesRequest $request, vaccines $vaccines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vaccines $vaccines)
    {
        //
    }
}
