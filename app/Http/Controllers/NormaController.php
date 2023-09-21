<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use Illuminate\Http\Request;

class NormaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Norma::where('nombre', 'Samuel')->get()
        $normas = Norma::get();

        return view('normas.norma-index', ['normas' => $normas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('normas.norma-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required|max:255',
        //     'referencia' => 'required|url',
        //     'tipo' => 'required',
        // ]);
        
        $norma = new Norma();
        $norma->nombre = $request->nombre;
        $norma->referencia = $request->referencia;
        $norma->tipo = $request->tipo;
        $norma->save();

        return redirect()->route('norma.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Norma $norma)
    {
        return view('normas.norma-show', compact('norma'));
        //$norma = Norma::find($id);
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
