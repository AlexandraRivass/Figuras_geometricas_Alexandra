<?php
//() -> los paréntesis EJECUTAN una función.
//Sin ellos, PHP solo ve una palabra suelta y no hace nada.
// session_start();
// header("Location: validar.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./validacion/validar.php" method="POST">
        <label for="figuras">Escoge una figura</label>
            <!-- name-> donde guarda el PHP
             id=-> donde guarda el JS-->
            <select id="figuras" onblur="opciones()" name="figuras">
                <!--Selected-> es la opcion que viene por defecto de primeras
                Disabled-> que no se puede marcar  -->
                <option selected disabled>Selecciona una opcion:</option>

                <option value="triangulo">Triángulo</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="circulo">Círculo</option>
            </select>

            <p id="aviso"></p>
        <button name="submit" id="submit">Enviar</button>
    </form>

    <script src="./comprobacion.js"></script>
</body>
</html>