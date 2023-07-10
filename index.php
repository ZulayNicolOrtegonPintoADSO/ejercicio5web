<?php
    // DEFINICIÓN DE VARIABLES VACIAS EN EL PHP
    $num1 = "" ;
    $num2 = "" ;

    $operacion = null ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACIONES BÁSICAS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container ">
        <div class="row my-5 border border-warning border-5 rounded bg-dark text-light">

            <p class="fs-1 text-center fst-italic my-2">OPERACIONES BÁSICAS<p>

            <form action="index.php" method="post" id="formulario">
                
                <!-- CONTENEDOR PARA EL NÚMERO 1 -->
                <div class="input-group mb-3 ">
                    <span class="input-group-text bg-warning">NUMERO 1:</span>
                    <input type="text" class="form-control" name="num1" id="num1">
                </div>

                <!-- CONTENEDOR PARA EL NÚMERO 2 -->
                <div class="input-group mb-3">
                    <span class="input-group-text bg-warning ">NUMERO 2:</span>
                    <input type="text" class="form-control" name="num2" id="num2">
                </div>

                <!-- CONTENERDOR DE LAS OPERACIONES-->
                <div class="mb-3 d-flex justify-content-center">
                                        
                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-warning" type="radio" name="operacion" id="operacion1" value="sumar" <?php if($operacion == "sumar") echo "checked"?>>
                        <label class="form-check-label" for="operacion1">Sumar</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-warning" type="radio" name="operacion" id="operacion2" value="restar" <?php if($operacion == "restar") echo "checked" ?>>
                        <label class="form-check-label" for="operacion2">Restar</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-warning" type="radio" name="operacion" id="operacion3" value="multiplicar" <?php if($operacion == "multiplicar") echo "checked" ?>>
                        <label class="form-check-label" for="operacion3">Multiplicar</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input border-warning" type="radio" name="operacion" id="operacion4" value="dividir" <?php if($operacion == "dividir") echo "checked" ?>>
                        <label class="form-check-label" for="operacion4">Dividir</label>
                    </div>

                </div>
                
                <!-- BOTÓN PARA ENVIAR EL FORMULARIO -->
                <div class="col-md-12  d-flex justify-content-center my-3">
                     <input type="submit" class="form-control bg-warning" value="CALCULAR" id="btnEnviar">
                </div>

            </form>
        </div>
    </div>

    <!-- CONTENEDOR PARA MOSTRAR RESULTADO -->
    <div class="container">
        <div class="row my-5 border border-warning border-5 rounded bg-dark text-light"> 
            <?php 
                include "operaciones.php";
                valCampos(); 
            ?>
        </div>  
    </div>

    <marquee class="text-light fs-5 fst-italic"> Realizado por Zulay Ortegon de la ficha ADSO 2500845</marquee>
    
    <script src="main.js"></script>
</body>
</html>