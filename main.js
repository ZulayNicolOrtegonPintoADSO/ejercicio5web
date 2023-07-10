const formulario = document.getElementById('formulario');
const btnEnviar = document.getElementById('btnEnviar');

const num1 = document.getElementById('num1');
const num2 = document.getElementById('num2');

const operaciones = document.getElementsByName('operacion');

let rta = 0;

const soloNumeros = (e) => {

    if ( e.keyCode < 48 || e.keyCode > 57 && e.keyCode) {
        e.preventDefault()
    }
}

const enviarFormulario = formulario => {
    formulario.submit()
}

const suma = (num1 , num2) => { rta = num1 + num2 }
const resta = (num1 , num2) => { rta = num1 + num2 }
const multiplicacion = (num1 , num2) => { rta = num1 + num2 }
const division = (num1 , num2) => { rta = num1 + num2 }

const validacion = (e) => {
    e.preventDefault()

    let seleccionoperacion = ''
    for (const operacion of operaciones) {
        if (operacion.checked) {
            seleccionoperacion = operacion.value
            break
        }
    }

    if (num1.value == "") {
        console.log("❌ERROR, llena el campo número 1");
        num1.focus()
        return false
    }

    if (num2.value == "") {
        console.log("❌ERROR, llena el campo número 2");
        num2.focus()
        return false
    }

    if (seleccionoperacion === "") {
        console.log("❌ERROR, llena el campo operacion (selecciona una operación)");
        return false
    }

    else{

        if(seleccionoperacion === "sumar"){
            console.log(`El resultado de la suma es: ${suma (num1 , num2)}`);  
        }

        if(seleccionoperacion === "restar"){
            console.log(`El resultado de la resta es: ${resta (num1 , num2)}`);  
        }

        if(seleccionoperacion === "multiplicar"){
            console.log(`El resultado de la multiplicación es: ${multiplicacion (num1 , num2)}`);  
        }

        if(seleccionoperacion === "dividir"){
            console.log(`El resultado de la división es: ${division (num1 , num2)}`);  
        }
        

    }
    enviarFormulario(formulario)

}

num1.addEventListener('keypress', soloNumeros)
num2.addEventListener('keypress', soloNumeros)

btnEnviar.addEventListener('click', validacion)