<?php
session_start();
    $figuras = $_SESSION["figura"] ?? "";

    // Si no hay figura en la sesión (alguien abrió lados.php directamente), se vuelve al inicio
    if ($figuras == "") {
        header("Location: ./index.php");
        exit();
    }

    // Lados guardados en la sesión (vacío si no hay).
    // htmlspecialchars evita que lo escrito rompa el HTML.
    $lado1 = htmlspecialchars($_SESSION["lado1"] ?? "");
    $lado2 = htmlspecialchars($_SESSION["lado2"] ?? "");
    $lado3 = htmlspecialchars($_SESSION["lado3"] ?? "");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lados</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="formulario">
<header>
<?php
    // "cuadrado" = value de la <option> de index.php.
    // Viaja: index.php -> validar.php -> sesión -> aquí.

    //NOMBRE DE LA FIGURA
    echo "Tu figura es: " . $figuras;

    // Mensaje de error que dejó validar.php (si lo hay)
    if (isset($_SESSION["errorLados"])) {
        echo "<p class='aviso'>" . $_SESSION["errorLados"] . "</p>";
        unset($_SESSION["errorLados"]);
    }
    ?>
</header>
<?php
    ///FORMULARIO DE CUADRADO
    if($figuras == "cuadrado"){ ?>
        <form action="./validacion/validar.php" method="POST" onsubmit="return validarFormulario()">

            <!-- PARA LADO 1 -->
            <div class="campo">
                <label for="lado1">Lado1: </label>
                <input type="text" id="lado1" name="lado1" value="<?php echo $lado1; ?>" onblur="validarCampo('lado1')">
            </div>

            <!-- MENSAJE(AVISO)1 -->
            <p class="aviso" id="aviso_lado1"></p>

            <!-- EL BOTON -->
            <button class="boton" type="submit" name="calcular">Calcular</button>
        </form>
    <?php 
    //FORMULARIO DE RECTANGULO
    } elseif($figuras == "rectangulo"){ ?>
        <form action="./validacion/validar.php" method="POST" onsubmit="return validarFormulario()">

            <!-- PARA LADO 1 -->
            <div class="campo">
                <label for="lado1">Lado1: </label>
                <input type="text" id="lado1" name="lado1" value="<?php echo $lado1; ?>" onblur="validarCampo('lado1')">
            </div>

            <!-- MENSAJE(AVISO)1 -->
            <p class="aviso" id="aviso_lado1"></p>

            <!-- PARA LADO 2 -->
            <div class="campo">
                <label for="lado2">Lado2: </label>
                <input type="text" id="lado2" name="lado2" value="<?php echo $lado2; ?>" onblur="validarCampo('lado2')">
            </div>

            <!-- MENSAJE(AVISO)2 -->
            <p class="aviso" id="aviso_lado2"></p>

            <!-- EL BOTON -->
            <button class="boton" type="submit" name="calcular">Calcular</button>
        </form>
    <?php 
    //FORMULARIO DE CIRCULO
    } elseif($figuras == "circulo"){ ?>
        <form action="./validacion/validar.php" method="POST" onsubmit="return validarFormulario()">

            <!-- PARA EL RADIO (lado1) -->
            <div class="campo">
                <label for="lado1">Radio: </label>
                <input type="text" id="lado1" name="lado1" value="<?php echo $lado1; ?>" onblur="validarCampo('lado1')">
            </div>

            <!-- MENSAJE(AVISO)1 -->
            <p class="aviso" id="aviso_lado1"></p>

            <!-- EL BOTON -->
            <button class="boton" type="submit" name="calcular">Calcular</button>
        </form>
    <?php 
    //FORMULARIO DE TRIANGULO
    } elseif($figuras == "triangulo"){ ?>
        <form action="./validacion/validar.php" method="POST" onsubmit="return validarFormulario()">

            <!-- PARA LADO 1 -->
            <div class="campo">
                <label for="lado1">Lado1: </label>
                <input type="text" id="lado1" name="lado1" value="<?php echo $lado1; ?>" onblur="validarCampo('lado1')">
            </div>

            <!-- MENSAJE(AVISO)1 -->
            <p class="aviso" id="aviso_lado1"></p>

            <!-- PARA LADO 2 -->
            <div class="campo">
                <label for="lado2">Lado2: </label>
                <input type="text" id="lado2" name="lado2" value="<?php echo $lado2; ?>" onblur="validarCampo('lado2')">
            </div>

            <!-- MENSAJE(AVISO)2 -->
            <p class="aviso" id="aviso_lado2"></p>

            <!-- PARA LADO 3 -->
            <div class="campo">
                <label for="lado3">Lado3: </label>
                <input type="text" id="lado3" name="lado3" value="<?php echo $lado3; ?>" onblur="validarCampo('lado3')">
            </div>

            <!-- MENSAJE(AVISO)3 -->
            <p class="aviso" id="aviso_lado3"></p>

            <!-- EL BOTON -->
            <button class="boton" type="submit" name="calcular">Calcular</button>
        </form>
    <?php } ?>

    <!-- BOTON PARA CAMBIAR DE FIGURA -->
    <button class="boton1" type="button" onclick="location.href='./index.php'">Cambia de figura</button>
</div>
    <script src="./validacion/comprobacion.js"></script>
</body>
</html>