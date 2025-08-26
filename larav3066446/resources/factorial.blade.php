<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Calcular el factorial de un número</h1>
    
    <form action="{{ route('factorial.calcular') }}" method="POST">
        @csrf
        <label for="num">Ingresa un número:</label>
        <input type="number" name="num" id="num" required min="0">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
