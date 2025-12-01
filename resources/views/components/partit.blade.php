<div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 max-w-lg mx-auto">
    
    {{-- Encabezado: Local vs Visitante --}}
    <div class="text-center border-b pb-4 mb-4">
        <h2 class="text-2xl font-bold text-blue-800">
            {{ $local }} <span class="text-gray-400 text-base">vs</span> {{ $visitant }}
        </h2>
    </div>

    {{-- Detalles --}}
    <div class="space-y-3 text-lg text-center">
        <p>
            <span class="font-bold text-gray-700">Data:</span> 
            {{ $data }}
        </p>
        <p>
            <span class="font-bold text-gray-700">Resultat:</span> 
            <span class="bg-blue-100 text-blue-800 font-bold px-3 py-1 rounded">
                {{ $resultat }}
            </span>
        </p>
    </div>
    
    {{-- Botón volver --}}
    <div class="mt-6 pt-4 border-t">
        <a href="{{ route('partits.index') }}" class="text-blue-600 hover:underline text-sm">
            &larr; Tornar a la llista
        </a>
    </div>
</div>