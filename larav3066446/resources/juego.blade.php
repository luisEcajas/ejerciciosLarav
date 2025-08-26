<!DOCTYPE html>
<html>
<head>
    <title>Juego Adivina el Número</title>
</head>
<body>
    <h1>Formulario Para A Adivinar el numero</h1>
    <form action="{{route('adivinar.vista')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="tittle">Ingrese un numero de 1 a 70:</label>
        <input type="number" id="tittle" name="num" required>

        <input type="hidden" name= "numeroAleatorio" value="{{ $numeroAleatorio}}">
        <br><br>
        
        <button type="submit">Enviar</button>
        </form>


</body>
</html>
