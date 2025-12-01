<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Guia de futbol femení')</title>

    {{-- Carga de estilos mediante Vite (Obligatorio por enunciado) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <header class="bg-blue-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <a href="/" class="text-xl font-bold hover:text-blue-200 mr-6">
                ⚽ Futbol Femení
            </a>
            
            <nav>
              <ul class="flex space-x-4">
                <li><a class="text-white hover:underline" href="/">Inici</a></li>
                <li><a class="text-white hover:underline" href="{{ route('equips.index') }}">Guia d'Equips</a></li>
                <li><a class="text-white hover:underline" href="{{ route('estadis.index') }}">Llistat d'Estadis</a></li>
                <li><a class="text-white hover:underline" href="{{ route('jugadoras.index') }}">Llistat de Jugadores</a></li>
                <li><a class="text-white hover:underline" href="{{ route('partits.index') }}">Llistat de Partits</a></li>
              </ul>
            </nav>
        </div>
    </header>
  
    <main class="container mx-auto p-6 flex-grow">
        @yield('content')
    </main>
  
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
        <p>&copy; 2025 Guia de Futbol Femení</p>
    </footer>

</body>
</html>