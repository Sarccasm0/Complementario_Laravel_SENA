<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <style>
        *{
            font-family: monospace;
            font-size: 2rem;

        }
    </style>
    <h1>
        Dias de la semana:
    </h1>
    <p>
        @switch($dia)
            @case(1)
                Lunes
                @break
            @case(2)
                Martes
                @break
            @case(3)
                Miercoles
                @break
            @case(4)
                Jueves
                @break
            @case(5)
                Viernes
                @break
            @case(6)
                Sabado
                @break
            @case(7)
                Domingo
                @break
            @default
                Dia erroneo
                @break
        @endswitch
    </p>

</body>
</html>
