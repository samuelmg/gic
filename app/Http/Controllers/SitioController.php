<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function inicio()
    {
        return view('landing')
            ->with([
                'nombre' => 'Samuel',
                'apellido' => 'Mercado'
            ]);
    }

    public function contacto(string $tipo_persona = null)
    {
        if (!is_null($tipo_persona)) {
            $tipo_persona = ucwords(str_replace('-', ' ', $tipo_persona));
        }
        return view('contacto', compact('tipo_persona'));
    }

    public function crearContacto (Request $request)
    {
        // Recibir datos
        $correo = $request->correo;

        // Validación de datos
        // Validación de que $correo es un correo

        // Inserción a DB
        // Insert into tabla (correo) value ('$correo')

        // Redireccionamiento
        return redirect()->route('inicio');
    }
}
