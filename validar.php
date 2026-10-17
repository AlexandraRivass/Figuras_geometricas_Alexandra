<?php
// ha llegado un dato con este nombre por POST(Submit)?
if(!filter_has_var(INPUT_POST, 'submit')){
    header("Location: index.php");
    exit(); //corta la ejecucion

// ha llegado un dato con este nombre por POST(figuras)?
}if($_POST['figuras'] === "" ){
    header("Location: index.php?miss=error");
    exit();
}else{
    header("Location: figuras.php");
    exit;
}


//?msi=error

// let ____ :new URLSearchParams(window.location.earch);
//___(segun el nombre)= ___get.('msi')
?>
