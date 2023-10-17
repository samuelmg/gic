<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use App\Models\Requerimiento;
use Illuminate\Http\Request;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reqs = Requerimiento::all();
        return view('req.req-index', compact('reqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $normas = Norma::all();

        return view('req.captura-req-form', compact('normas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // FORMA 1 DE GUARDAR RELACION
        $req = new Requerimiento();
        $req->identificador = $request->identificador;
        $req->descripcion = $request->descripcion;
        $req->norma_id = $request->norma_id;
        $req->save();

        // FORMA 2 DE GUARDAR RELACION 
        $req = new Requerimiento();
        $req->identificador = $request->identificador;
        $req->descripcion = $request->descripcion;

        $norma = Norma::find($request->norma_id);
        $norma->requerimientos()->save($req);

        return redirect()->route('norma.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requerimiento $requerimiento)
    {
        //
    }
}
