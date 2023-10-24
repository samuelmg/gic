<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NormaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
                                //->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Norma::where('nombre', 'Samuel')->get()
        $normas = Norma::where('user_id', Auth::id())->get();

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
        $request->validate([
            'nombre' => 'required|max:255',
            'referencia' => 'required',
            'tipo' => 'required',
        ]);
        // dd($request->all());

        $request->merge(['user_id' => Auth::id()]);
        Norma::create($request->all());

        // $norma = new Norma();
        // $norma->nombre = $request->nombre;
        // $norma->referencia = $request->referencia;
        // $norma->tipo = $request->tipo;
        // $norma->user_id = Auth::id();
        // $norma->save();

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
        return view('normas.norma-edit', compact('norma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Norma $norma)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'referencia' => 'required',
            'tipo' => 'required',
        ]);

        Norma::where('id', $norma->id)
            ->update($request->except('_token', '_method'));

        // $norma->nombre = $request->nombre;
        // $norma->referencia = $request->referencia;
        // $norma->tipo = $request->tipo;
        // $norma->save();
        return redirect()->route('norma.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Norma $norma)
    {
        $norma->delete();
        return redirect()->route('norma.index');
    }
}
