@extends('layouts.app')

@section('title', "Llista de Partits")

@section('content')
<h1 >Llista de Partits</h1>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
@endif

<p class="mb-4">
  <a href="{{ route('partits.create') }}" class="bg-blue-600 text-white px-3 py-2 rounded">Nou partit</a>
</p>

<table class="w-full border-collapse border border-gray-300">
  <thead class="bg-gray-200">
  <tr>
    <th class="border border-gray-300 p-2">Local</th>
    <th class="border border-gray-300 p-2">Visitant</th>
    <th class="border border-gray-300 p-2">Data</th>
    <th class="border border-gray-300 p-2">Resultat</th>
  </tr>
  </thead>
  <tbody>
  @foreach($partits as $key => $partit)
    <tr class="hover:bg-gray-100">
      <td class="border border-gray-300 p-2">
        {{-- Enlace al show pasando la clave $key --}}
        <a href="{{ route('partits.show', $key) }}" class="text-blue-700 hover:underline">
            <x-equip-mini :nom="$partit['local']" />
        </a>
      </td>
      <td class="border border-gray-300 p-2">
        <x-equip-mini :nom="$partit['visitant']" />
      </td>
      <td class="border border-gray-300 p-2">{{ $partit['data'] }}</td>
      <td class="border border-gray-300 p-2">{{ $partit['resultat'] ?? '-' }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection