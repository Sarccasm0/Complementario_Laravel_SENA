<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control.</title>
</head>
<body>
    <h1>Nota: {{$nota}}</h1>
    <p>
        Resultado:
        @if($nota >= 8)

            Aprobado

        @else

            Reprobado

        @endif
    </p>
</body>
</html>
