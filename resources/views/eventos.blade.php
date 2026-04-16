<!DOCTYPE html>
<html>
<head>
    <title>Eventos</title>
</head>
<body>
    <h1>Lista de Eventos</h1>
    <ul>
    @foreach ($eventos as $evento)
        <li>{{ $evento }}</li>
    @endforeach
</ul>
</body>
</html>