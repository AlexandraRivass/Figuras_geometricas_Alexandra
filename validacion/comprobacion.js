//AVISO SI VUELVE DE PHP SIN FIGURA 
// Lee la dirección: index.php?miss=error
let comprueba = new URLSearchParams(window.location.search);
let miss = comprueba.get('miss')

//Comprueba si llegó con error
if(miss === 'error'){// === -> operador de igualdad estricta
    alert("Debes elegir una figura para continuar.");
}


// PÁGINA 1 (index.php): VALIDAR LA FIGURA
function opciones() {
    const select = document.getElementById("figuras");
    const aviso = document.getElementById("aviso");

    // Si esta página no tiene el desplegable (ej: lados.php), no hay nada que validar
    if (!select) {
        return true;
    }

    // selectedIndex 0 = la opción "Selecciona una opcion:" (disabled)
    if (select.selectedIndex === 0) {
        aviso.textContent = "Debes escoger una figura.";
        aviso.style.color = "red";
        return false;
    }

    aviso.textContent = "";
    return true;
}

// Al enviar index.php, también se valida la figura
const desplegable = document.getElementById("figuras");

if (desplegable) {
    document.querySelector("form").addEventListener("submit", function (e) {
        if (!opciones()) {
            e.preventDefault(); // frena el envío al PHP
        }
    });
}


//  PÁGINA 2 (lados.php): VALIDAR LOS LADOS
// Se ejecuta al salir de cada campo (onblur)
function validarCampo(id) {
    const input = document.getElementById(id);
    const aviso = document.getElementById("aviso_" + id);

    // Si este campo no existe en la figura elegida (ej: lado2 en el cuadrado), se ignora
    if (!input) {
        return true;
    }

    const valor = input.value.trim();

    // Vacío, no es número, o no es mayor que 0
    if (valor === "" || isNaN(valor) || Number(valor) <= 0) {
        aviso.textContent = "Introduce un número mayor que 0 (decimales con punto).";
        aviso.style.color = "red";
        return false;
    }

    aviso.textContent = "";
    return true;
}




// Solo el triángulo: cada lado tiene que ser menor que la suma de los otros dos
function validarTriangulo() {
    const campo3 = document.getElementById("lado3");

    // Si no hay lado3, la figura no es un triángulo y no hay nada que comprobar
    if (!campo3) {
        return true;
    }

    const a = Number(document.getElementById("lado1").value);
    const b = Number(document.getElementById("lado2").value);
    const c = Number(campo3.value);
    const aviso = document.getElementById("aviso_lado3");

    // Si alguna suma de dos lados no supera al tercero, no se cierra el triángulo
    if (a + b <= c || a + c <= b || b + c <= a) {
        aviso.textContent = "Con estos lados NO se puede formar un triángulo.";
        aviso.style.color = "red";
        return false;
    }

    return true;
}

// Se ejecuta al enviar el formulario (onsubmit="return validarFormulario()")
function validarFormulario() {
    let todoCorrecto = true;

    if (!validarCampo("lado1")) {
        todoCorrecto = false;
    }
    if (!validarCampo("lado2")) {
        todoCorrecto = false;
    }
    if (!validarCampo("lado3")) {
        todoCorrecto = false;
    }

    // Solo si los tres son números válidos, se comprueba que formen un triángulo
    if (todoCorrecto && !validarTriangulo()) {
        todoCorrecto = false;
    }

    return todoCorrecto;
}