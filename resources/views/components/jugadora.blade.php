@props(['nombre', 'posicion', 'dorsal', 'equipo'])

<div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 max-w-lg mx-auto">
    {{-- Encabezado con Nombre y Dorsal --}}
    <div class="flex justify-between items-center border-b pb-4 mb-4">
        <h2 class="text-2xl font-bold text-blue-800">{{ $nombre }}</h2>
        <span class="text-3xl font-bold text-gray-300">#{{ $dorsal }}</span>
    </div>

    {{-- Detalles --}}
    <div class="space-y-3 text-lg">
        <p>
            <span class="font-bold text-gray-700">Equip:</span> 
            {{ $equipo }}
        </p>
        <p>
            <span class="font-bold text-gray-700">Posició:</span> 
            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-2.5 py-0.5 rounded">
                {{ $posicion }}
            </span>
        </p>
    </div>
    
    {{-- Botón volver (opcional dentro del componente, útil si se usa como ficha única) --}}
    <div class="mt-6 pt-4 border-t">
        <a href="{{ route('jugadoras.index') }}" class="text-blue-600 hover:underline text-sm">
            &larr; Tornar a la llista
        </a>
    </div>
</div>