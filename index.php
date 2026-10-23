<?php
session_start();//abre como una libreta de la sesión en esa página
// ?? "" -> si no hay figura guardada, queda vacío
$figuraGuardada = $_SESSION["figura"] ?? "";


// Mensaje si validar.php nos devuelve aquí por no elegir figura
$mensajeError = "";
if (($_GET["miss"] ?? "") == "error") {
    $mensajeError = "Debes elegir una figura para continuar.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form class="formulario" action="./validacion/validar.php" method="POST">
        <div class="campo">
            <label for="figuras">Escoge una figura</label>
            <!-- name-> donde guarda el PHP
             id=-> donde guarda el JS-->
            <select id="figuras" onblur="opciones()" name="figuras">
                <!--Selected-> es la opcion que viene por defecto de primeras
                Disabled-> que no se puede marcar  -->
                <option <?php if($figuraGuardada == "") echo "selected"; ?> disabled>Selecciona una opcion:</option>
                <!-- pregunta “¿esta opción es la guardada?”Si sí, escribe la palabra selected. Si no, no escribe nadaa -->
                <option value="triangulo" <?php if($figuraGuardada == "triangulo") echo "selected"; ?>>Triángulo</option>
                <option value="rectangulo" <?php if($figuraGuardada == "rectangulo") echo "selected"; ?>>Rectángulo</option>
                <option value="cuadrado" <?php if($figuraGuardada == "cuadrado") echo "selected"; ?>>Cuadrado</option>
                <option value="circulo" <?php if($figuraGuardada == "circulo") echo "selected"; ?>>Círculo</option>
            </select>
        </div>

        <p class="aviso" id="aviso" style="color: black;"><?php echo $mensajeError; ?></p>
        <button class="boton" name="submit" id="submit">Enviar</button>
    </form>

    <script src="./validacion/comprobacion.js"></script>
</body>
</html>