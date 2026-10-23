<?php
session_start();
require_once "./objetos/cuadrado.php";
require_once "./objetos/rectangulo.php";
require_once "./objetos/circulo.php";
require_once "./objetos/triangulo.php";

// Si no hay figura, se vuelve al inicio
if (!isset($_SESSION["figura"])) {
    header("Location: ./index.php");
    exit();
}

// Si validar.php no dio por buenos los lados, se vuelve a lados.php
if (!isset($_SESSION["ladosValidos"]) || $_SESSION["ladosValidos"] !== true) {
    header("Location: ./lados.php");
    exit();
}

// Se recuperan los datos DESDE LA SESIÓN
$figuras = $_SESSION["figura"];
$lado1 = $_SESSION["lado1"];
$lado2 = $_SESSION["lado2"] ?? "";
$lado3 = $_SESSION["lado3"] ?? "";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="formulario">
    <header>
    <?php
    echo "Tu figura es: " . $figuras;
    ?>
    </header>

    <?php
    //if comprueba qué figura eligió el usuario, para decidir cuál de los cuatro new ejecutar.

    if($figuras == "cuadrado"){//CUADRADO
        $miFigurita = new Cuadrado($figuras, $lado1);
        //MENSAJE
        echo $miFigurita;
    }elseif($figuras == "rectangulo"){//RECTANGULO
        $miFigurita = new Rectangulo($figuras, $lado1, $lado2);
        //MENSAJE
        echo $miFigurita;
    }elseif($figuras == "circulo"){//CIRCULO
        $miFigurita = new Circulo($figuras, $lado1);
        //MENSAJE
        echo $miFigurita;
    }elseif($figuras == "triangulo"){//TRIANGULO
        $miFigurita = new Triangulo($figuras, $lado1, $lado2, $lado3);
        //MENSAJE
        echo $miFigurita;
    }
    ?>

    <!-- BOTONES DE NAVEGACION -->
    <button class="boton1" type="button" onclick="location.href='./lados.php'">Volver a los lados</button>
    <button class="boton1" type="button" onclick="location.href='./index.php'">Cambiar de figura</button>
    <button class="boton1" type="button" onclick="location.href='./index.php'">Vuelve al inicio</button>
</div>
</body>
</html>