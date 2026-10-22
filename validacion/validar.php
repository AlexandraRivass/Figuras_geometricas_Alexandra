<?php

session_start();

// ha llegado un dato con este nombre por POST(Submit)?
if(!filter_has_var(INPUT_POST, 'submit')){
    header("Location: ../index.php");
    exit(); //corta la ejecucion
}

// ha llegado un dato con este nombre por POST(figuras)?
if($_POST['figuras'] == "" ){
    header("Location: ../index.php?miss=error");
    exit();
} 
//Aqui me mira que hay dentro del POST
$figuras=$_POST['figuras'];

// Lo apunta en la sesión (la "libreta") con el título "figura",
// para que figuras.php pueda leerlo después

// -"figuras";  apunta la palabra "figuras"
// -$figuras;   apunta "rectangulo"
$_SESSION["figura"] = $figuras; 

header("Location: ../figuras.php");
exit();
?>
