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


function opciones() {
    const select = document.getElementById("figuras");
    const aviso = document.getElementById("aviso");

    // selectedIndex 0 = la opción "Selecciona una opcion:" (disabled)
    if (select.selectedIndex === 0) {
        aviso.textContent = "Debes escoger una figura.";
        aviso.style.color = "red";
        return false;
    }

    aviso.textContent = "";
    return true;
}

// Validar también al enviar el formulario
document.querySelector("form").addEventListener("submit", function (e) {
    if (!opciones()) {
        e.preventDefault(); // frena el envío al PHP
    }
});




function validarLado(id) {
    const input = document.getElementById(id);
    const aviso = document.getElementById("aviso_" + id);
    const valor = input.value.trim();

    if (valor === "" || isNaN(valor) || Number(valor) <= 0) {
        aviso.textContent = "Introduce un número mayor que 0.";
        aviso.style.color = "red";
        return false;
    }

    aviso.textContent = "";
    return true;
}

const form = document.querySelector("form");

if (form) {
    form.addEventListener("submit", function (e) {
        let ok = true;

        form.querySelectorAll("input[type='text']").forEach(function (input) {
            if (!validarLado(input.id)) ok = false;
        });

        if (!ok) e.preventDefault(); // no envía a resultado.php
    });
}