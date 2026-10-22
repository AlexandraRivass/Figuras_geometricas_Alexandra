<?php
session_start();
require_once "./objetos/cuadrado.php";
require_once "./objetos/rectangulo.php";
require_once "./objetos/circulo.php";
require_once "./objetos/triangulo.php";

$figuras = $_SESSION["figura"];

// lado1 llega SIEMPRE: las cuatro figuras tienen al menos un campo con ese name
// Por eso se lee directo sin el issettt
$lado1 = $_POST["lado1"];

// lado2 solo llega en rectángulo y triángulo
if (isset($_POST["lado2"])) {
    $lado2 = $_POST["lado2"];
}

// lado3 solo llega en triángulo
if (isset($_POST["lado3"])) {
    $lado3 = $_POST["lado3"];
}
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
</body>
</html>