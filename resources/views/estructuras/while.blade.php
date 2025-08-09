<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h1>
        While:
    </h1>

    <p>
        {{$number}}

        @while($number > 0)
            <p>Se repite: {{$number=$number-1}} veces</p>
        @endwhile
    </p>
</body>
</html>
