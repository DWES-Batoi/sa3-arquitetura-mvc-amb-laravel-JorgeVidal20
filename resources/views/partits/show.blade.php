{{-- Extiende del layout principal --}}
@extends('layouts.app')

{{-- Título de la pestaña --}}
@section('title', "Detall del Partit")

{{-- Contenido principal --}}
@section('content')
  {{-- Componente Blade "partit" al que le pasamos los datos. 
       Usamos 'resultat' ?? '-' por si el partido aún no se ha jugado --}}
  <x-partit :local="$partit['local']"
            :visitant="$partit['visitant']"
            :data="$partit['data']"
            :resultat="$partit['resultat'] ?? '-'"/>
@endsection