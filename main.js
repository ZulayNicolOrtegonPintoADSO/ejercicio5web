const formulario = document.getElementById('formulario');
const btnEnviar = document.getElementById('btnEnviar');

const num1 = document.getElementById('num1');
const num2 = document.getElementById('num2');

const operaciones = document.getElementsByName('operacion');

const soloNumeros = (e) => {

    if ( e.keyCode < 48 || e.keyCode > 57 && e.keyCode) {
        e.preventDefault()
    }
}

const enviarFormulario = formulario => {
    formulario.submit()
}

const suma = (n1 , n2) => { return n1 + n2 }

const resta = (n1 , n2) => { return n1 - n2 }
const multiplicacion = (n1 , n2) => { return n1 * n2 }
const division = (n1 , n2) => { return  n1 / n2 }

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
        let n1  = parseFloat(num1.value);
        let n2  = parseFloat(num2.value);

        if(seleccionoperacion === "sumar"){
            console.log(`El resultado de la suma es: ${suma (n1 , n2)}`);  
        }

        if(seleccionoperacion === "restar"){
            console.log(`El resultado de la resta es: ${resta (n1 , n2)}`);  
        }

        if(seleccionoperacion === "multiplicar"){
            console.log(`El resultado de la multiplicación es: ${multiplicacion (n1 , n2)}`);  
        }

        if(seleccionoperacion === "dividir"){
            console.log(`El resultado de la división es: ${division (n1 , n2)}`);  
        }
        

    }
    enviarFormulario(formulario)

}

num1.addEventListener('keypress', soloNumeros)
num2.addEventListener('keypress', soloNumeros)

btnEnviar.addEventListener('click', validacion)