<!DOCTYPE html>
<html>
<head>
    <title>Eventos</title>
</head>
<body>
    <h1>Eventos</h1>

<form action="/eventos" method="POST">
    @csrf

    <input type="text" name="evento" placeholder="Nuevo evento">

    <button type="submit">Agregar</button>

    <ul>
    @foreach ($eventos as $evento)
        <li>
            {{ $evento->nombre }}

            <form action="/eventos/{{ $evento->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>
</form>

</body>
</html>