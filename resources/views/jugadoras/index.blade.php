@extends('layouts.app')

@section('title', "Guia de jugadores")

@section('content')

  <h1 class="text-3xl font-bold text-blue-800 mb-6">Guia de jugadores</h1>

  @if (session('success'))
    <div class="bg-green-100 text-green-700 p-2 mb-4">
      {{ session('success') }}
    </div>
  @endif
  
  <p class="mb-4">
    <a href="{{ route('jugadoras.create') }}"
       class="bg-blue-600 text-white px-3 py-2 rounded">
      Nova jugadora
    </a>
  </p>

  <table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-100 font-bold">
        <tr>
            <th class="border border-gray-300 p-2 text-left">Nom</th>
            <th class="border border-gray-300 p-2 text-left">Posició</th>
            <th class="border border-gray-300 p-2 text-left">Dorsal</th>
            <th class="border border-gray-300 p-2 text-left">Equip</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jugadoras as $key => $jugadora)
        <tr class="hover:bg-gray-100">
            <td class="border border-gray-300 p-2">
                {{-- Pasamos la $key (índice 0, 1, 2...) a la ruta show --}}
                <a href="{{ route('jugadoras.show', $key) }}" class="text-blue-700 hover:underline">
                    {{ $jugadora['nombre'] }} 
                </a>
            </td>
            <td class="border border-gray-300 p-2">
                {{ $jugadora['posicion'] }}
            </td>
            <td class="border border-gray-300 p-2">
                {{ $jugadora['dorsal'] }}
            </td>
            <td class="border border-gray-300 p-2">
                {{ $jugadora['equipo'] }}
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection