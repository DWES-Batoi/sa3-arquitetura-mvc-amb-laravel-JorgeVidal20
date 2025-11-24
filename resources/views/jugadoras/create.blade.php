@extends('layouts.app')

@section('title', 'Afegir nova jugadora')

@section('content')
 
  <h1 class="text-2xl font-bold mb-4">Afegir nova jugadora</h1>

  @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-2 mb-4">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('jugadoras.store') }}" method="POST" class="space-y-4">
    @csrf

    {{-- Campo: Nombre --}}
    <div>
      <label for="nombre" class="block font-bold">Nom de la jugadora:</label>
      <input type="text" name="nombre" id="nombre"
             value="{{ old('nombre') }}" class="border p-2 w-full">
    </div>

    {{-- Campo: Posición --}}
    <div>
      <label for="posicion" class="block font-bold">Posició:</label>
      {{-- Puedes cambiar esto por un select si prefieres --}}
      <input type="text" name="posicion" id="posicion"
             placeholder="Ex: Portera,Migcampista,Davantera"
             value="{{ old('posicion') }}" class="border p-2 w-full">
    </div>

    {{-- Campo: Dorsal --}}
    <div>
      <label for="dorsal" class="block font-bold">Dorsal:</label>
      <input type="number" name="dorsal" id="dorsal"
             value="{{ old('dorsal') }}" class="border p-2 w-full">
    </div>

    {{-- Campo: Equipo --}}
    <div>
      <label for="equipo" class="block font-bold">Equip:</label>
      <input type="text" name="equipo" id="equipo"
             value="{{ old('equipo') }}" class="border p-2 w-full">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
      Afegir
    </button>
  </form>
@endsection