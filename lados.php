<?php
session_start();
    $figuras = $_SESSION["figura"]; 

    // "cuadrado" = value de la <option> de index.php.
    // Viaja: index.php -> validar.php -> sesión -> aquí.

    //NOMBRE DE LA FIGURA
    echo "Tu figura es: " . $figuras;

    ///FORMULARIO DE CUADRADO
    if($figuras == "cuadrado"){ ?>
        <form action="./resultado.php" method="POST">

            <!-- PARA LADO 1 -->
            <label for="lado1">Lado1: </label>
            <input type="text" id="lado1" name="lado1">

            <!-- MENSAJE(AVISO)1 -->
            <p id="aviso_lado1"></p>

            <!-- EL BOTON -->
            <button type="submit" name="calcular">Calcular</button>
        </form>
    <?php 
    //FORMULARIO DE RECTANGULO
    } elseif($figuras == "rectangulo"){ ?>
        <form action="./resultado.php" method="POST">

            <!-- PARA LADO 1 -->
            <label for="lado1">Lado1: </label>
            <input type="text" id="lado1" name="lado1">

            <!-- MENSAJE(AVISO)1 -->
            <p id="aviso_lado1"></p>

            <!-- PARA LADO 2 -->
            <label for="lado2">Lado2: </label>
            <input type="text" id="lado2" name="lado2">

            <!-- MENSAJE(AVISO)2 -->
            <p id="aviso_lado2"></p>

            <!-- EL BOTON -->
            <button type="submit" name="calcular">Calcular</button>
        </form>
    <?php 
    //FORMULARIO DE CIRCULO
    } elseif($figuras == "circulo"){ ?>
        <form action="./resultado.php" method="POST">

            <!-- PARA EL RADIO (lado1) -->
            <label for="lado1">Radio: </label>
            <input type="text" id="lado1" name="lado1">

            <!-- MENSAJE(AVISO)1 -->
            <p id="aviso_lado1"></p>

            <!-- EL BOTON -->
            <button type="submit" name="calcular">Calcular</button>
        </form>
    <?php 
    //FORMULARIO DE TRIANGULO
    } elseif($figuras == "triangulo"){ ?>
        <form action="./resultado.php" method="POST">

            <!-- PARA LADO 1 -->
            <label for="lado1">Lado1: </label>
            <input type="text" id="lado1" name="lado1">

            <!-- MENSAJE(AVISO)1 -->
            <p id="aviso_lado1"></p>

            <!-- PARA LADO 2 -->
            <label for="lado2">Lado2: </label>
            <input type="text" id="lado2" name="lado2">

            <!-- MENSAJE(AVISO)2 -->
            <p id="aviso_lado2"></p>

            <!-- PARA LADO 3 -->
            <label for="lado3">Lado3: </label>
            <input type="text" id="lado3" name="lado3">

            <!-- MENSAJE(AVISO)3 -->
            <p id="aviso_lado3"></p>

            <!-- EL BOTON -->
            <button type="submit" name="calcular">Calcular</button>
        </form>
    <?php } ?>