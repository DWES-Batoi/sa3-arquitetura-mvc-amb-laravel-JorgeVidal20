<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Crear Partit</title>
</head>
<body>
    <h1>Afegir Nou Partit</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('partits.store') }}" method="POST">
        @csrf
        
        <label>Equip Local:</label><br>
        <input type="text" name="local" value="{{ old('local') }}"><br><br>

        <label>Equip Visitant:</label><br>
        <input type="text" name="visitant" value="{{ old('visitant') }}"><br><br>

        <label>Data:</label><br>
        <input type="date" name="data" value="{{ old('data') }}"><br><br>

        <label>Resultat (Opcional, format 0-0):</label><br>
        <input type="text" name="resultat" value="{{ old('resultat') }}" placeholder="Ex: 2-1"><br><br>

        <button type="submit">Guardar Partit</button>
    </form>
    <br>
    <a href="{{ route('partits.index') }}">Tornar a la llista</a>
</body>
</html>