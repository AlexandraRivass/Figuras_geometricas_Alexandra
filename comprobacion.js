let comprueba = new URLSearchParams(window.location.search);
let miss = comprueba.get('miss')

//Comprueba si llegó con error
if(miss === 'error'){// === -> operador de igualdad estricta
    alert("Debes elegir una figura para continuar.");
}


// const figuritas = document.getElementById("figuras")
// function opciones(){
//     // .value -> es lo que ha elegido el usuario en el desplegable.
//     if(figuritas.value == ""){
//         console.log(figuritas.value)
//     }

// }
