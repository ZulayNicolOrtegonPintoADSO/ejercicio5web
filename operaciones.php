<?php
    // VERIFICACIÓN PARA QUE LOS CAMPOS ESTÉN LLENOS
    function mensajes($num1, $num2, $operacion){
        if ($num1 == "" || $num2 == "" || $operacion == "") {
            echo "<p class='text-danger text-center my-3'>❌ERROR, llena todos los campos</p>";
        }else{
            if (is_numeric($num1) && is_numeric($num1) && $num1 > 0 && $num2 > 0){
                echo "<p class='text-success text-center my-3'>✅CORRECTO, campos llenados correctamente</p>";
                return true ;
            }  else{
                echo "<p class='text-danger text-center my-3'>❌ERROR, los campos num1 y num2 deben ser números postivos</p>";
            }
        }
    }

    // FUNCIONES DE LAS OPERACIONES
    function sum($num1, $num2){ return $num1 + $num2; }
    function res($num1, $num2){ return $num1 - $num2; }
    function mul($num1, $num2){ return $num1 * $num2;}
    function div($num1, $num2){ return $num1 / $num2; }

    // FUNCIÓN PARA DEFINIR OPERACIÓN DEPENDIENDO LO ESCOGIDO
    function operacion($num1, $num2, $operacion){
        if($operacion == 'sumar'){
            return sum($num1, $num2);
        }

        if($operacion == 'restar'){
            return res($num1, $num2);
        }

        if($operacion == 'multiplicar'){
            return mul($num1, $num2);
        }

        if($operacion == 'dividir'){
            return div($num1, $num2);
        }
        
    }
    
    // FUNCIÓN PARA MOSTRAR RESULTADOS
    function valCampos(){
        $num1 = isset($_POST['num1']) ? $_POST['num1'] : "";
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : "";
        $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : null;

        $rta = 0 ;

        if (mensajes($num1, $num2, $operacion)){
            echo "<p class='text-success text-center fs-1'> El resultado es: " , operacion($num1, $num2, $operacion) , "</p>";   
        }
    }
    
?>