<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>
</head>
<body>
    <h1>For Each</h1>

    @foreach ($lista as $item)
        <p>{{$item}}</p>
    @endforeach

    @php
    function sumar($num1 , $num2)  {
        return $num1 + $num2;
    }
    @endphp

    <p>{{sumar(20,25)}}</p>

</body>
</html>
