<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartitController extends Controller
{
    // Datos iniciales de ejemplo
    public $partits = [
        ['local' => 'Barça Femení', 'visitant' => 'Real Madrid Femení', 'data' => '2023-11-19', 'resultat' => '5-0'],
        ['local' => 'Atlètic de Madrid', 'visitant' => 'Levante Las Planas', 'data' => '2023-11-20', 'resultat' => '2-1'],
    ];

    public function index()
    {
        $partits = Session::get('partits', $this->partits);
        return view('partits.index', compact('partits'));
    }

    public function create()
    {
        return view('partits.create');
    }

    public function store(Request $request)
    {
        $missatges = [
            'resultat.regex' => 'El format del resultat ha de ser ex: 2-1',
            'visitant.different' => 'L\'equip visitant ha de ser diferent del local.'
        ];

        $validat = $request->validate([
            'local'    => 'required|min:2',
            'visitant' => 'required|min:2|different:local',
            'data'     => 'required|date',
            'resultat' => 'nullable|regex:/^\d+-\d+$/', // Ex: 3-0, 1-1
        ], $missatges);

        $partits = Session::get('partits', $this->partits);
        $partits[] = $validat;
        Session::put('partits', $partits);

        return redirect()->route('partits.index')->with('success', 'Partit creat correctament!');
    }
    public function show($id)
    {
        // Recuperamos los partidos de la sesión
        $partits = Session::get('partits', $this->partits);

        // Si no existe el índice, error 404
        abort_if(!isset($partits[$id]), 404);

        $partit = $partits[$id];

        return view('partits.show', compact('partit'));
    }
}