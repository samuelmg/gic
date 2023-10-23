<?php

namespace App\Http\Controllers;

use App\Models\Norma;
use App\Models\Organizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NormaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $normas = Norma::where('user_id', Auth::id())->get();
        
        return view('norma/indexNorma', compact('normas'));
            //->with(['normas' => $normas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orgs = Organizacion::all();
        return view('norma/createNorma', compact('orgs'));
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
        
        // $request->all();
        $request->merge(['user_id' => Auth::id()]);
        $norma = Norma::create($request->all());

        $norma->organizaciones()->attach($request->organizacion_id);

        // $norma = new Norma();
        // $norma->nombre = $request->nombre;
        // $norma->referencia = $request->referencia;
        // $norma->tipo = $request->tipo;
        // $norma->user_id = Auth::id(); // FORMA 1 DE AGREGAR USER_ID
        // $norma->save();

        // $user = Auth::user();
        // $user->normas()->save($norma);

        return redirect()->route('norma.index');
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
        return view('norma.editNorma', compact('norma'));
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

        // dd($request->except('_token', '_method'));
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
