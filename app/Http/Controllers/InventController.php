<?php

namespace App\Http\Controllers;

use App\Models\Invent;
use Illuminate\Http\Request;

class InventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.inventaris.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invent $invent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invent $invent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invent $invent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invent $invent)
    {
        //
    }
}
