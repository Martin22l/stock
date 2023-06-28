<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFamiliaRequest;
use App\Http\Requests\UpdateFamiliaRequest;
use App\Models\Familia;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familias=Familia::get();
        return view('familia.familia_index',compact('familias'));
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
    public function store(StoreFamiliaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Familia $familia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Familia $familia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFamiliaRequest $request, Familia $familia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Familia $familia)
    {
        //
    }
}
