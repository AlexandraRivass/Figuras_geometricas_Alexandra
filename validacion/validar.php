<?php

session_start();

//  FORMULARIO 2 (lados.php): llega el botón "calcular"
if (filter_has_var(INPUT_POST, 'calcular')) {

    // ?? "" -> si el lado no llega, queda vacío
    $lado1 = $_POST["lado1"] ?? "";
    $lado2 = $_POST["lado2"] ?? "";
    $lado3 = $_POST["lado3"] ?? "";
    $figuras = $_SESSION["figura"] ?? "";

    // Se apuntan en la sesión para que, si hay error, vuelvan escritos en los campos
    $_SESSION["lado1"] = $lado1;
    $_SESSION["lado2"] = $lado2;
    $_SESSION["lado3"] = $lado3;

    $errorLados = "";

    // Cada lado que necesita la figura tiene que ser un número mayor que 0
    if (!is_numeric($lado1) || $lado1 <= 0) {
        $errorLados = "El primer lado tiene que ser un número mayor que 0.";
    } elseif (($figuras == "rectangulo" || $figuras == "triangulo") && (!is_numeric($lado2) || $lado2 <= 0)) {
        $errorLados = "El segundo lado tiene que ser un número mayor que 0.";
    } elseif ($figuras == "triangulo" && (!is_numeric($lado3) || $lado3 <= 0)) {
        $errorLados = "El tercer lado tiene que ser un número mayor que 0.";
    } elseif ($figuras == "triangulo" && ($lado1 + $lado2 <= $lado3 || $lado1 + $lado3 <= $lado2 || $lado2 + $lado3 <= $lado1)) {
        // Cada lado tiene que ser menor que la suma de los otros dos
        $errorLados = "Esos lados no forman un triángulo.";
    }

    // Si hay error: se deja el mensaje en la sesión y se vuelve a lados.php
    if ($errorLados != "") {
        $_SESSION["errorLados"] = $errorLados;
        $_SESSION["ladosValidos"] = false;
        header("Location: ../lados.php");
        exit();
    }

    // Todo bien: se marca como válido y se pasa a resultado.php
    $_SESSION["ladosValidos"] = true;
    header("Location: ../resultado.php");
    exit();
}

// FORMULARIO 1 (index.php): llega el botón "submit"

// ha llegado un dato con este nombre por POST(Submit)?
if(!filter_has_var(INPUT_POST, 'submit')){
    header("Location: ../index.php");
    exit(); //corta la ejecucion
}

// ha llegado un dato con este nombre por POST(figuras)?
if(($_POST['figuras'] ?? "") == "" ){
    header("Location: ../index.php?miss=error");
    exit();
} 


// La figura tiene que ser una de las cuatro que existen (comparación estricta)
$figurasValidas = ["triangulo", "rectangulo", "cuadrado", "circulo"];

if (!in_array($_POST['figuras'], $figurasValidas, true)) {
    header("Location: ../index.php?miss=error");
    exit();
}

//Aqui me mira que hay dentro del POST
$figuras=$_POST['figuras'];

// Lo apunta en la sesión (la "libreta") con el título "figura",
// para que lados.php pueda leerlo después
$_SESSION["figura"] = $figuras; 

// Al cambiar de figura, los lados anteriores ya no valen
$_SESSION["ladosValidos"] = false;

header("Location: ../lados.php");
exit();
?>