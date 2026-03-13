<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller {
    public function store(Request $request) {
        // Validamos según el enunciado
        $data = $request->validate([
            'nombres'   => 'required|string',
            'apellidos' => 'required|string',
            'correo'    => 'required|email|unique:personas,correo',
            'sexo'      => 'required|string',
        ]);

        // Creamos el registro físicamente
        Persona::create($data);

        // Retornamos 201 como pide la práctica para las Assertions
        return response()->json(['message' => 'Registrado con éxito'], 201);
    }
}