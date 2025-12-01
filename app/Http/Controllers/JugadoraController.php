<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JugadoraController extends Controller
{
    // Datos iniciales de ejemplo (añadido 'dorsal' que faltaba)
    public $jugadoras = [
        [
            "nombre" => "Alexia Putellas",
            "posicion" => "Migcampista",
            "dorsal" => 11,
            "equipo" => "FC Barcelona Femení"
        ],
        [
            "nombre" => "Esther González",
            "posicion" => "Davantera",
            "dorsal" => 10,
            "equipo" => "Atlètic de Madrid" // O Gotham FC actualmente
        ],
        [
            "nombre" => "Misa Rodríguez",
            "posicion" => "Portera",
            "dorsal" => 1,
            "equipo" => "Real Madrid Femení"
        ]
    ];

    public function index()
    {
        // Recuperamos de sesión o usamos el default
        $jugadoras = Session::get("jugadoras", $this->jugadoras);

        return view('jugadoras.index', compact('jugadoras'));
    }

    // Cambiamos $nom por $key porque en el index pasas la clave numérica del array
    public function show($key)
    {
        $jugadoras = Session::get('jugadoras', $this->jugadoras);

        // Verificamos si existe el índice en el array
        abort_if(!isset($jugadoras[$key]), 404);

        $jugadora = $jugadoras[$key];

        return view('jugadoras.show', compact('jugadora'));
    }

    public function create()
    {
        return view("jugadoras.create");
    }

    public function store(Request $request)
    {
        // Validación corregida (añadido dorsal y sintaxis 'in:')
        $formularioValidado = $request->validate([
            'nombre'   => 'required|min:3',
            'equipo'   => 'required|min:2',
            'dorsal'   => 'required|integer',
            'posicion' => 'required|in:Portera,Defensa,Migcampista,Davantera'
        ]);

        $jugadoras = Session::get('jugadoras', $this->jugadoras);

        // Añadimos la nueva jugadora al array
        $jugadoras[] = $formularioValidado;

        // Guardamos en sesión
        Session::put('jugadoras', $jugadoras);

        return redirect()->route('jugadoras.index')->with('success', 'Jugadora afegida correctament');
    }
}