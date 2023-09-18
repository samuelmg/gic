<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use Illuminate\Http\Request;

class NormaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('norma/indexNorma');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('norma/createNorma');
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
    public function show(Norma $norma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Norma $norma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Norma $norma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Norma $norma)
    {
        //
    }
}
