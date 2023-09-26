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
        $normas = Norma::all();
        return view('norma/indexNorma', compact('normas'));
            //->with(['normas' => $normas]);
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
        $norma = new Norma();
        $norma->nombre = $request->nombre;
        $norma->referencia = $request->referencia;
        $norma->tipo = $request->tipo;
        $norma->save();

        return redirect('/norma');
    }

    /**
     * Display the specified resource.
     */
    public function show(Norma $norma)
    {
        //$norma = Norma::find($id);
        return view('norma.showNorma', compact('norma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Norma $norma)
    {
        return view('editar-algo', compact('norma'));
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
