{{-- Esta vista también extiende del layout principal --}}
@extends('layouts.app')

{{-- Título de la pestaña --}}
@section('title', "Detall de la jugadora")

{{-- Contenido principal --}}
@section('content')
  {{-- Componente Blade "jugadora". Asumimos que has creado este componente o usarás uno genérico --}}
  <x-jugadora :nombre="$jugadora['nombre']"
              :posicion="$jugadora['posicion']"
              :dorsal="$jugadora['dorsal']"
              :equipo="$jugadora['equipo']"/>
@endsection